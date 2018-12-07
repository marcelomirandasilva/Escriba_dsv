<?php

namespace App\Http\Controllers;

use App\Bibliotecas\Geral;

use App\Models\Loja;
use App\Models\Pais;
use App\Models\Potencia;
use DB;

use Illuminate\Http\Request;


class LojaController extends Controller
{
	//cria a loja para ser usada em todas as rotas
	private $loja;
	
	public function __construct(Loja $loja)
	{
		$this->loja = $loja; 
		
		// todas as rotas aqui serão antes autenticadas
		$this->middleware('auth');
	}


   public function index()
	{
		$lojas = $this->loja->all();
		//dd($lojas);
		return view('lojas.lista', compact('lojas'));
	}


	public function create()
	{
		$titulo = "Cadastro de Lojas";

		$potencias  = Potencia::all()->sortBy('no_potencia');
		$paises     = Pais::all()->sortBy('nome');        

		$ritos      =  pegaValorEnum('lojas','ic_rito') ;

		//dd($ritos);

		return view('lojas.create_edit',compact('potencias','paises','ritos','titulo'));
	}


	public function store(Request $request)
	{
		//inicia sessão de banco
		DB::beginTransaction();

		
		$pais =  Pais::where('no_pais', '=', $request->no_pais)->firstOrFail();
		$request->merge(['pais_id' => $pais->id]);

		
		if(trim($request->co_titulo) == null)
		{
			$request->merge(['co_titulo' => "ARLS"]);
		}else{
			$request->merge(['co_titulo'  => strtoupper($request->co_titulo)]);
		};

		if($request->dt_fundacao != ""){
			$request->merge([
				'dt_fundacao'       => $this->inverterData($request->input('dt_fundacao')),
			]);
		}else{
			$request->merge([
				'dt_fundacao'       => null,
			]);
		};
		
		//dd($request->all());

		$request->merge([
			//'ic_tipo_endereco'  => 'Loja',
			'sg_uf'             => strtoupper($request->sg_uf),
		]);

		$this->validate($request, [
			'co_titulo'     => 'required|min:3|max:10',
			'no_loja'       => 'required|min:3|max:50',
			'nu_loja'       => 'required|numeric|max:999999',
			'potencia_id'   => 'required',
			'ic_rito'       => 'required',
			'dt_fundacao'   => 'nullable|date',
			
			//email
			'de_email'      => 'nullable|email',

			//telefone
			'nu_telefone'   => 'nullable|min:9|max:15',

			//endereço
			'nu_cep'        => 'nullable|min:10|max:10',
			'sg_uf'         => 'required_with:no_logradouro|nullable|alpha|min:2|max:2',
			'no_municipio'  => 'required_with:no_logradouro|nullable|min:3|max:50',
			'no_bairro'     => 'required_with:no_logradouro|nullable|min:3|max:20',
			'no_logradouro' => 'required_with:nu_cep|nullable|min:3|max:100',
			'nu_logradouro' => 'required_with:no_logradouro|nullable|numeric',

		]);

		
		$busca_loja = DB::table('lojas')
					 ->select(DB::raw('count(*) as count'))
					 ->where('no_loja', '=', $request->no_loja )
					 ->where([
								['nu_loja', '=', $request->nu_loja],
								['no_loja', '=', $request->no_loja],
							])
					 ->get();

		//verifica se já existe uma loja com o mesmo nome e numero, porém, com o id diferente(o mesmo id significa a loja que está sendo alterada)
		if ($busca_loja[0]->count > 0 ){

			//se encontrar alguma loja na busca acima retorna erro informando
			return redirect()->back()->withInput()->with('ja_existe', 'A '
														.$request->co_titulo    .' ' 
														.$request->no_loja      .' Nº ' 
														.$request->nu_loja 
														.' Já existe!');
		}

	
		// Criar uma nova loja
		$loja = new Loja($request->all());
		// Salvar no banco para obter o ID
		
		$novaLoja = $loja->save();


		if($novaLoja ){
			DB::commit();
			return redirect('/lojas')->with('sucesso',  $request->co_titulo    .' ' 
												.$request->no_loja      .' Nº ' 
												.$request->nu_loja 
												.' Cadastrada com Sucesso');
		} else {
			//Fail, desfaz as alterações no banco de dados
			DB::rollBack();
			return redirect()->back()->with(['erros' => 'Falha ao cadastrar']);   
		}



	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{

		$loja = $this->loja->find($id);

		if( $this->loja->find($id-1))
			{ $anterior = $this->loja->find($id-1); }
		else
			{ $anterior = $this->loja->find($id); }

		if( $this->loja->find($id+1))
			{ $proximo = $this->loja->find($id+1); }
		else
			{ $proximo = $this->loja->find($id); }


		return view('lojas.show',compact('loja','anterior','proximo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{

		$potencias  = Potencia::all()->sortBy('no_potencia');
		$paises     = Pais::all()->sortBy('nome');        
		$ritos      = pegaValorEnum('lojas','ic_rito') ;

		$loja = $this->loja->find($id);
		//dd($loja);

		$edita = true;

		$titulo = "Edição da Loja: {$loja->co_titulo} {$loja->no_loja} N°{$loja->nu_loja}";

  
		return view('lojas.create_edit',compact('potencias','paises','ritos','loja', 'titulo','edita'));


	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//inicia sessão de banco
		DB::beginTransaction();

	   // Validar dados do formulário
		//$this->validar($request);

		//verifica se já existe uma loja com o mesmo nome e numero, porém, com o id diferente(o mesmo id significa a loja que está sendo alterada)
		$busca_loja = DB::table('lojas')
					 ->select(DB::raw('count(*) as count'))
					 ->where('no_loja', '=', $request->no_loja )
					 ->where([
								['nu_loja', '=', $request->nu_loja],
								['no_loja', '=', $request->no_loja],
								['id',      '<>', $id],
							])
					 ->get();

		//dd($request->all());
		//se encontrar alguma loja na busca acima retorna erro informando
		if ($busca_loja[0]->count > 0 ){

			return redirect()->back()->with('ja_existe', 'A '
														.$request->co_titulo    .' ' 
														.$request->no_loja      .' Nº ' 
														.$request->nu_loja 
														.' Já existe!');
		}

		$dadosFormulario = $request->all();
		$loja = $this->loja->find($id);
		
		$salvouLoja 		= $loja->update($dadosFormulario);
		
		


		if ($salvouLoja) {
			DB::commit();
			return redirect('lojas'	)->with('sucesso',  $request->co_titulo    .' ' 
														.$request->no_loja      .' Nº ' 
														.$request->nu_loja 
														.' Alterada com Sucesso');
		} else {
			DB::rollBack();
			return redirect('lojas.edit', $id)->whith(['erros' => 'Falha ao editar']); 
		}
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$loja = Loja::findOrFail($id);
		$loja->delete();

		return redirect('lojas');

	}

	/**
	 * Formatar a data para o padrão americano
	 */

	protected function inverterData($data)
	{
		return implode("-", array_reverse(explode("/", $data)));
	}

	protected function validar($request)
	{
		// Validar
		$this->validate($request, [
			'co_titulo'     => 'required|min:3|max:10',
			'no_loja'       => 'required|min:3|max:50',
			'nu_loja'       => 'required|numeric',
			'potencia_id'   => 'required',
			'ic_rito'       => 'required',
			'dt_fundacao'   => 'date',
			
			//email
			'de_email'      => 'email',

			//telefone
			'nu_telefone'   => 'min:9|max:15',

			//endereço
			'nu_cep'        => 'min:10|max:10',
			'sg_uf'         => 'alpha|min:2|max:2',
			'no_municipio'  => 'min:3|max:50',
			'no_bairro'     => 'min:3|max:20',
			'no_logradouro' => 'min:3|max:100',
			'nu_logradouro' => 'numeric',
			'de_complemento'=> 'min:3|max:20',
		]);
	}


	/* ========================================AJAX====================================== */

	function nova_ajax(Request $request)
	{
		if( trim($request->co_titulo) == "")
		{
			$request->merge([
				'co_titulo' => "ARLS"
			]);
		}else{
			$request->merge([
				'co_titulo'  => strtoupper($request->co_titulo),
			]);
		};

		

		// Validar dados do formulário
		$validacao = $this->validate($request, [
			'co_titulo'     => 'required|min:3|max:10',
			'no_loja'       => 'required|min:3|max:50',
			'nu_loja'       => 'required|numeric',
			'potencia_id'   => 'required',
		]);

		// if ($validacao->fails()) {
		//     return response()->json($validator->messages(), 200);
		// } 

		$busca_loja = DB::table('lojas')
					 ->select(DB::raw('count(*) as count'))
					 ->where('no_loja', '=', $request->no_loja )
					 ->where([
								['nu_loja', '=', $request->nu_loja],
								['no_loja', '=', $request->no_loja],
							])
					 ->get();

		//verifica se já existe uma loja com o mesmo nome e numero, porém, com o id diferente(o mesmo id significa a loja que está sendo alterada)
		if ($busca_loja[0]->count > 0 ){

			//se encontrar alguma loja na busca acima retorna erro informando
			 return 'A '.$request->co_titulo    .' ' 
						.$request->no_loja      .' Nº ' 
						.$request->nu_loja 
						.' Já existe!';
		}

		// Criar uma nova loja
		$loja = new Loja($request->all());

		// Salvar no banco para obter o ID
		$loja->save();


		return  $loja;

	}




}


