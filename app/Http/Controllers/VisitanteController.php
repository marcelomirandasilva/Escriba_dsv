<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Visitante;
use App\Models\Endereco;
use App\Models\Pais;
use App\Models\User;
use App\Models\Loja;
use App\Models\Cargo;
use App\Models\Telefone;
use App\Models\Email;
use App\Models\Dependente;
use App\Models\Cerimonia;
use App\Models\Potencia;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

 
class VisitanteController extends Controller
{
	// todas as rotas aqui serão antes autenticadas
	private $visitante;
	public function __construct(visitante $visitante)
	{
		$this->visitante = $visitante; 
		
		// todas as rotas aqui serão antes autenticadas
		$this->middleware('auth');
	}

	public function index()
	{
      $usuario_logado     = User::find(Auth::user()->id);

		$visitantes = Visitante::with(['loja'])->get();

		//dd($visitantes[0]->loja->no_loja);

		return view('visitantes/lista', compact('visitantes','usuario_logado'));

	}



	public function create()
	{
		$titulo = "Cadastro de Visitantes";
		$grau               = pegaValorEnum('visitantes','ic_grau');                      
		$estado_civil       = pegaValorEnum('visitantes','ic_estado_civil'); 
		$potencias          = Potencia::all()->sortBy('no_potencia');
		$ritos              = pegaValorEnum('lojas','ic_rito') ;

		$cargos             = Cargo::all()->sortBy('no_cargo');
		$cargos_ocupados    =[];
				
		
		//orderna os valores dos arrays
		sort($estado_civil);
		
		$paises     = Pais::all()->sortBy('nome');        
		$lojas      = Loja::all()->sortBy('no_loja');    
		
		
		return view('visitantes.create',compact(['estado_civil','grau','titulo','lojas','potencias','ritos',]));
		
	}
	
	public function store(Request $request)
	{
		//se for candidaro, coloca zeros no CIM
		if(trim($request->ic_grau) == "Candidato")
		{
			$request->merge(['co_cim' => "000.000"]);
		}

		if(trim($request->loja_id_iniciacao) == "null"){$request->merge(['loja_id_iniciacao' => null]);}
		if(trim($request->loja_id_elevacao) == "null"){$request->merge(['loja_id_elevacao' => null]);}
		if(trim($request->loja_id_exaltacao) == "null"){$request->merge(['loja_id_exaltacao' => null]);}
		if(trim($request->loja_id_instalacao) == "null"){$request->merge(['loja_id_instalacao' => null]);}

		// Validar dados do formulário
		$this->validate($request, [
			'visitante'         	=> 'required|min:3|max:50',
			'co_cim'            	=> 'required|max:11',
			'cpf'               	=>  'cpf',

			'dt_nascimento'     	=> 'date|nullable',
			'dt_casamento'      	=> 'date|nullable',
			'dt_emissao_idt'    	=> 'date|nullable',
			'dt_emissao_titulo' 	=> 'date|nullable',
			'dt_iniciacao'     	=> 'date|nullable',
			'dt_elevacao'     	=> 'date|nullable',
			'dt_exaltacao'     	=> 'date|nullable',
			'dt_instalacao'     	=> 'date|nullable',
			'dt_filiacao'     	=> 'date|nullable',
			'dt_regularizacao'  	=> 'date|nullable',
			'dt_honorario'			=> 'date|nullable',
			'dt_remido'				=> 'date|nullable',
			'dt_emerito'			=> 'date|nullable',
			'dt_benemerito'		=> 'date|nullable',
			'dt_grande_benemerito'	=> 'date|nullable',
			'dt_estrela_distincao'	=> 'date|nullable',
			'dt_cruz_perfeicao'	=> 'date|nullable',
			'dt_comanda_DPI'		=> 'date|nullable',
		]);

		//dd($request->all());
		
		//inicia sessão de banco
		DB::beginTransaction();
		
		// Cria um novo visitante
		$visitante = new Visitante($request->all());
		
		// Verificar se está aposentado
		$visitante->ic_aposentado = $request->aposentado ? 1 : 0;

		// Salvar no banco para obter o ID
		$visitante->save();
		
		//cria os cargos
		if(isset($request->visitantes))
		{
			foreach($request->visitantes as $key => $cargo)
			{
				$cg = json_decode($cargo) ;
			
				$cargo_id = Cargo::where('no_cargo', "=", $cg->cargo_nome)->first();
				
				$visitante->cargos()->attach($cargo_id, ['aa_inicio' => $cg->aa_inicio, 'aa_termino' => $cg->aa_termino]);
			}
		}
		
		
		//verifica se existe algum dependente a ser cadastrado
		if($request->dependentes[0]["no_dependente"] != null)
		{
			foreach($request->dependentes as $dependente)
			{
				// Criar um novo dependente com as informações inseridas
				$visitante->dependentes()->save(new Dependente($dependente));
			}
		}	
		
	
		if ($visitante) {
			DB::commit();
			return redirect('/visitantes')->with('sucesso', ' O visitante '
																		.strtoupper($request->visitante)    .' CIM Nº ' 
																		.$request->co_cim
																		.' foi cadastrado com sucesso'
																	);
		} else {
			DB::rollBack();
			return redirect('/visitantes/create')->with(['erros' => 'Falha ao cadastrar']); 
		}
	}


	public function show(Visitante $visitante)
	{

		dd("Não implementado ainda");

		return view('visitantes.show',compact('visitante','anterior','proximo'));
	}

	public function edit($id)
	{
		$visitante = $this->visitante->find($id);

		$emails             = $visitante->emails;
		$dependentes        = $visitante->dependentes;
		$potencias          = Potencia::all()->sortBy('no_potencia');
		$ritos              = pegaValorEnum('lojas','ic_rito') ;
		$cargos             = Cargo::all()->sortBy('no_cargo');
		
		$edita = true;
		$titulo = "Edição de Visitante";

		$aposentado         = ['Sim','Não'];

		$escolaridade       = pegaValorEnum('visitantes','ic_escolaridade');                                                   
		$situacao           = pegaValorEnum('visitantes','ic_situacao');                                                   
		$grau               = pegaValorEnum('visitantes','ic_grau');                      
		$estado_civil       = pegaValorEnum('visitantes','ic_estado_civil'); 
		 
		$sexos              = pegaValorEnum('dependentes','ic_sexo'); 
		$parentescos        = pegaValorEnum('dependentes','ic_grau_parentesco'); 
		$cargos_ocupados    = [];        

		//orderna os valores dos arrays
		sort($estado_civil);
		sort($situacao);
		sort($parentescos);

		$paises     = Pais::all()->sortBy('nome');
		$lojas      = Loja::all()->sortBy('no_loja');
		
		return view('visitantes.create',compact(['visitante','edita','enderecos', 'telefones', 'emails','dependentes','estado_civil','grau','situacao','escolaridade','aposentado','paises','titulo','parentescos','lojas','sexos','potencias','ritos','cargos','cargos_ocupados']));
		
	}

	public function destroy($id)
	{
		return "exclui o Visitante: {$id}";
	}

	public function update(Request $request, $id)
	{
		
		//dd($request->all());
		if(trim($request->loja_id_iniciacao) == "null"){$request->merge(['loja_id_iniciacao' => null]);}
		if(trim($request->loja_id_elevacao) == "null"){$request->merge(['loja_id_elevacao' => null]);}
		if(trim($request->loja_id_exaltacao) == "null"){$request->merge(['loja_id_exaltacao' => null]);}
		if(trim($request->loja_id_instalacao) == "null"){$request->merge(['loja_id_instalacao' => null]);}

		// Validar dados do formulário
		$this->validate($request, [
			'visitante'         	=> 'required|min:3|max:50',
			'co_cim'            	=> 'required|max:11',
			'cpf'               	=>  'cpf',

			'dt_nascimento'     	=> 'date|nullable',
			'dt_casamento'      	=> 'date|nullable',
			'dt_emissao_idt'    	=> 'date|nullable',
			'dt_emissao_titulo' 	=> 'date|nullable',
			'dt_iniciacao'     	=> 'date|nullable',
			'dt_elevacao'     	=> 'date|nullable',
			'dt_exaltacao'     	=> 'date|nullable',
			'dt_instalacao'     	=> 'date|nullable',
			'dt_filiacao'     	=> 'date|nullable',
			'dt_regularizacao'  	=> 'date|nullable',
			'dt_honorario'			=> 'date|nullable',
			'dt_remido'				=> 'date|nullable',
			'dt_emerito'			=> 'date|nullable',
			'dt_benemerito'		=> 'date|nullable',
			'dt_grande_benemerito'	=> 'date|nullable',
			'dt_estrela_distincao'	=> 'date|nullable',
			'dt_cruz_perfeicao'	=> 'date|nullable',
			'dt_comanda_DPI'		=> 'date|nullable',
		]);
		
		
		// Busca o visitante;
		$visitante = Visitante::find($id);

		//Atualizar os dados do visitante;
		$visitante->update($request->all());

		// atualiza o status de aposentadoria
		$visitante->ic_aposentado = $request->aposentado ? 1 : 0;
		
		// Salvar no banco para obter o ID
		$visitante->save();
		
	

		/* ==================================================================================== */
		/* ENDEREÇO */
		/* ==================================================================================== */
		//apaga todos os endereços do visitante
		/* $visitante->enderecos()->delete();

		// Criar novos endereços com as informações enviadas
		foreach($request->enderecos as $endereco)
		{
			$visitante->enderecos()->save(new Endereco($endereco));
		} */
		
		/* ==================================================================================== */
		/* DEPENDENTE */
		/* ==================================================================================== */
		//apaga todos os dependentes do visitante
		$visitante->dependentes()->delete();
		//dd($request->all());

		// Criar novos dependentes com as informações enviadas
		if(isset($request->dependentes))
		{
			//se o nome do dependente for diferente de NULL
			if( ! Isset($request->dependentes[0])  ||  $request->dependentes[0]['no_dependente'] != null)
			{
					$b = 0;
					foreach($request->dependentes as $dependente)
					{
						$novo_dependente = new Dependente($dependente);
						$visitante->dependentes()->save($novo_dependente);
						$b++;
					}
			}
		}


		
		/* ==================================================================================== */
		/* OCUPAÇÂO DE CARGOS */
		/* ==================================================================================== */
		//apaga todas as ocupações de cargos do visitante
		$visitante->cargos()->delete();

		
		//cria os cargos
		if(isset($request->visitantes))
		{
			foreach($request->visitantes as $key => $cargo)
			{
				$cg = json_decode($cargo) ;
			
				$cargo_id = Cargo::where('no_cargo', "=", $cg->cargo_nome)->first();
				
				$visitante->cargos()->attach($cargo_id, ['aa_inicio' => $cg->aa_inicio, 'aa_termino' => $cg->aa_termino]);
			}
		}

		
		if ($visitante /*and $cerimonia*/) {

			return redirect('/visitantes')->with('sucesso', ' O visitante '
																		.strtoupper($request->visitante)    .' CIM Nº ' 
																		.$request->co_cim
																		.' foi cadastrado com sucesso'
																	);
		} else {
			return redirect('/visitantes')->with(['erros' => 'Falha ao cadastrar']); 
		}

	}

	/**
	 * Formatar a data para o padrão americano
	 */

	protected function inverterData($data)
	{
		return implode("-", array_reverse(explode("/", $data)));
	}


	

}





