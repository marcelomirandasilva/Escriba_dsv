<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Faker\Generator as Faker;

use App\Models\Visitante;
use App\Models\Setup;
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
		$hh_inicio = Setup::first()->hh_inicio_sessao;

		//adiciona 2 horas a hora de inicio
		$timestamp = strtotime($hh_inicio) + 60*120;
		$hh_termino = (string)strftime('%H:%M:00', $timestamp); // 24 - 12 - 2016, 11:15

		$graus   		=  pegaValorEnum('sessoes','ic_grau') ;
		$tipos_sessao  =  pegaValorEnum('sessoes','ic_tipo_sessao') ;

		$dados_tabela	= [];

		return view('sessoes.sessoes.create_edit', compact('membros','graus','tipos_sessao','hh_inicio','hh_termino','cargos','dados_tabela')) ;
	}

	public function store(Request $request)
	{
dd("aqui");
		$this->validate($request, [
			'dt_sessao'   		=> 'date',
			'hh_inicio'     	=> 'required',
			'hh_termino'      => 'required',
			'ic_tipo_sessao'  => 'required|',
			'ic_grau'   		=> 'required',
			
		]);
			
		//inicia sessão de banco
		DB::beginTransaction();
		

		// Criar uma sessao
	  	$novaSessao = Sessao::create($request->all());

/* 		//cria as presencas 
		if(isset($request->presencas))
		{
			foreach($request->presencas as $key => $presenca)
			{
				$cg = json_decode($presenca) ;
				$novaSessao->membros()->attach($cg->membro_id, ['cargo_id' => $cg->cargo_id]);
			}
		}
	 */
	
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

	public function edit( $id)
	{
		$membros = Membro::where('ic_situacao', '=', 'Regular Ativo')->orderBy('no_membro')->get();
		$cargos  = Cargo::orderBy('no_cargo')->get();
		
		$graus   		=  pegaValorEnum('sessoes','ic_grau') ;
		$tipos_sessao  =  pegaValorEnum('sessoes','ic_tipo_sessao') ;
		
		$sessao = Sessao::with('membros','cargos')->find($id);
		
		$dados_tabela = [];

		foreach ($sessao->membros as $key => $membr ) {
			
			$dados_tabela[$key] = [	
											"membro_id" => $sessao->membros[$key]->id,
											"membro" 	=> $sessao->membros[$key]->no_membro,
											"cargo_id" 	=> $sessao->cargos[$key]->id,
											"cargo"  	=> $sessao->cargos[$key]->no_cargo
										 ];

		};

		return view('sessoes.sessoes.create_edit', compact('sessao','membros','graus','tipos_sessao','cargos','dados_tabela' )) ;
	}

	public function update(Request $request, $id)
	{

		$this->validate($request, [
			'dt_sessao'   		=> 'date',
			'hh_inicio'     	=> 'required',
			'hh_termino'      => 'required',
			'ic_tipo_sessao'  => 'required|',
			'ic_grau'   		=> 'required',
			
		]);

		//inicia sessão de banco
		DB::beginTransaction();

		//dd($id);
		$sessao = Sessao::find($id);

		// altera os dados do sessao
		$sessao->fill($request->all());
		$salvou_sessao = $sessao->save();
		
		
		/* //cria as presencas 
		if(isset($request->presencas))
		{
			foreach($request->presencas as $key => $presenca)
			{
				$cg = json_decode($presenca) ;
				$sessao->membros()->attach($cg->membro_id, ['cargo_id' => $cg->cargo_id]);
			}
		} */


		if($salvou_sessao){
			DB::commit();
			return redirect('sessoes')->with('sucesso', 'Sessão Alterada com sucesso!');
		} else {
			//Fail, desfaz as alterações no banco de dados
			DB::rollBack();
			return back()->withInput()->with('error', 'Falha ao Alterar a Sessão.');    
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
