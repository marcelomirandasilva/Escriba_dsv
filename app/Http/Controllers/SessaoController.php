<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Faker\Generator as Faker;

use App\Models\Visitante;
use App\Models\Config;
use App\Models\Sessao;
use App\Models\Membro;
use App\Models\Cargo;


class SessaoController extends Controller
{
	public function __construct()
	{
	  $this->middleware('auth');

	}

	public function index()
	{
		$sessoes = Sessao::get();

		return view('sessoes.sessoes.lista',compact('sessoes') );
	}

	public function create()
	{

		$membros = Membro::where('ic_situacao', '=', 'Regular Ativo')->orderBy('no_membro')->get();
		$cargos  = Cargo::orderBy('no_cargo')->get();

		//carrega a hora que inicia a sessão na tabela de configurações
		$hh_inicio = Config::first()->hh_inicio_sessao;

		//adiciona 2 horas a hora de inicio
		$timestamp = strtotime($hh_inicio) + 60*120;
		$hh_termino = (string)strftime('%H:%M:00', $timestamp); // 24 - 12 - 2016, 11:15
		
		//dd($hh_inicio, $hh_termino);

		$graus   		=  pegaValorEnum('sessoes','ic_grau') ;
		$tipos_sessao  =  pegaValorEnum('sessoes','ic_tipo_sessao') ;
		
		//dd($membros);

		return view('sessoes.sessoes.create_edit', compact('membros','graus','tipos_sessao','hh_inicio','hh_termino','cargos')) ;
	}

	public function store(Request $request)
	{
	
		//dd($request->all());

		//inicia sessão de banco
		DB::beginTransaction();
		

		// Criar uma sessao
	  	$novaSessao = Sessao::create($request->all());



		//cria as presencas 
		if(isset($request->presencas))
		{
			foreach($request->presencas as $key => $presenca)
			{
				$cg = json_decode($presenca) ;
			
				$membro = Membro::where('no_membro', "=", $cg->no_membro)->first();
				
				//se não achar na tabela de membros irá procurar na tabela de visitantes
				//if($membro_id == null){
					//	$membro_id = Visitante::where('no_membro', "=", $cg->no_membro)->first();
					//}
					
				$cargo  = Cargo::where('no_cargo', "=", $cg->no_cargo)->first();

				$novaSessao->membros()->attach($membro->id, ['cargo_id' => $cargo->id]);
				
			
			}
		}
	
	
		DB::commit();
		return redirect('sessoes')->with('sucesso', 'Sessão criada com sucesso!');

		/* if($novoPosto){
			DB::commit();
			return redirect('posto')->with('sucesso', 'Posto criado com sucesso!');
		} else {
			//Fail, desfaz as alterações no banco de dados
			DB::rollBack();
			return back()->withInput()->with('error', 'Falha ao criar o posto.');    
		} */
	}

	public function show(Sessao $sessao)
	{
		//
	}

	public function edit(Sessao $sessao)
	{
		return view('posto.create', compact('posto'));
	}

	public function update(Request $request, Sessao $sessao)
	{
		//inicia sessão de banco
		DB::beginTransaction();

		$request->merge(['cnpj'     => str_replace('-', "", $request->cnpj)]);
		$request->merge(['cnpj'     => str_replace('.', "", $request->cnpj)]);
		$request->merge(['cnpj'     => str_replace('/', "", $request->cnpj)]);
		$request->merge(['gasolina' => str_replace('R$', "", $request->gasolina)]);
		$request->merge(['gasolina' => str_replace(' ', "", $request->gasolina)]);
		$request->merge(['gasolina' => str_replace(',', ".", $request->gasolina)]);
		$request->merge(['alcool'   => str_replace('R$', "", $request->alcool)]);
		$request->merge(['alcool'   => str_replace(' ', "", $request->alcool)]);
		$request->merge(['alcool'   => str_replace(',', ".", $request->alcool)]);
		$request->merge(['diesel'   => str_replace('R$', "", $request->diesel)]);
		$request->merge(['diesel'   => str_replace(' ', "", $request->diesel)]);
		$request->merge(['diesel'   => str_replace(',', ".", $request->diesel)]);
		$request->merge(['gnv'      => str_replace('R$', "", $request->gnv)]);
		$request->merge(['gnv'      => str_replace(' ', "", $request->gnv)]);
		$request->merge(['gnv'      => str_replace(',', ".", $request->gnv)]);

		
		$this->validate($request,[
			'cnpj'      => 'digits:14',
			'nome'      => 'required|min:5',
			'endereco'  => 'required|min:7',
			'gasolina'  => 'required|between:0,99.999',
			'alcool'    => 'required|between:0,99.999',
			'diesel'    => 'required|between:0,99.999',
			'gnv'       => 'required|between:0,99.999',
		]);
			
		
		// altera os dados do posto
	  $posto->fill($request->all());
		$salvou_posto = $posto->save();

		if($salvou_posto){
			DB::commit();
			return redirect('posto')->with('sucesso', 'Posto Alterado com sucesso!');
		} else {
			//Fail, desfaz as alterações no banco de dados
			DB::rollBack();
			return back()->withInput()->with('error', 'Falha ao Alterar o Posto.');    
		}
	}

	public function destroy($id)
	{
		//inicia sessão de banco
		DB::beginTransaction();
		//deleta
		
		$apagou_posto = Posto::find($id)->delete();
		if($apagou_posto){
			DB::commit();
			return response('ok', 200);
		} else {
			//Fail, desfaz as alterações no banco de dados
			DB::rollBack();
			return response('erro', 500);
		}
	}

	function parseUrl($url, $decode = false)
	{
		$retorno = [];
		$urlData = parse_url($url);
		if (empty($urlData['path'])) { return null; }
		$path = explode("&", $urlData['path']);

		
		$parameters = array();
		foreach($path as $parameter) {
			$param = explode("=", $parameter);
			
			$parameters[$param[0]] = urldecode($param[1]); // : $param[1];

			array_push($retorno, urldecode($param[0]), urldecode($param[1]));
		}
		return $retorno;
	}
}
