<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Presenca;
use App\Models\Visitante;
use App\Models\Setup;
use App\Models\Sessao;
use App\Models\Membro;
use App\Models\Cargo;





class PresencaController extends Controller
{
	
	public function index()
	{
		//
	}


	public function registra(Request $request)
	{
		
		$sessao 		= Sessao::find($request->sessao);
		
		
		switch ($sessao->ic_grau) {
			case 'Aprendiz':
				$membros 	= Membro::where('ic_situacao', '=', 'Regular Ativo')->orderBy('no_membro')->get();
				$visitantes = Visitante::all();
				break;

			case 'Companheiro':
				$membros 	= Membro::	where('ic_situacao', '=', 'Regular Ativo')->
												where('ic_grau', '<>', 'Aprendiz')->orderBy('no_membro')->get();

				$visitantes = Visitante::	where('ic_grau', '<>', 'Aprendiz')->
													where('ic_grau', '<>', null)->orderBy('no_visitante')->get();
				break;

			case 'Mestre':
				$membros 	= Membro::	where('ic_situacao', '=', 'Regular Ativo')->
												where('ic_grau', '<>', 'Companheiro')->
												where('ic_grau', '<>', 'Aprendiz')->orderBy('no_membro')->get();

				$visitantes = Visitante::	where('ic_grau', '<>', 'Aprendiz')->
													where('ic_grau', '<>', 'Companheiro')->
													where('ic_grau', '<>', null)->orderBy('no_visitante')->get();
				break;
			
			default:
				# code...
				break;
		}
			
		//dd($visitantes);
		
		$cargos  	= Cargo::orderBy('no_cargo')->get();

		$dados_tabela	= [];
		
		return view('sessoes.presencas.create_edit', compact('dados_tabela','sessao','membros','visitantes','cargos' )) ;
		

	}

	
	public function store(Request $request)
	{
		
	}


	public function show(Presenca $presenca)
	{
		//
	}

	
	public function edit(Presenca $presenca)
	{
		//
	}


	public function update(Request $request, Presenca $presenca)
	{
		//
	}


	public function destroy(Presenca $presenca)
	{
		//
	}
}
