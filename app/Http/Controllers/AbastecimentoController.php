<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Illuminate\Http\Request;

use App\Models\Veiculo;
use App\Models\Posto;
use App\Models\User;
use App\Models\Abastecimento;



class AbastecimentoController extends Controller
{
	public function __construct()
	{
	  $this->middleware('auth');

	}


	public function index()
	{
		$abastecimentos	= Abastecimento::with('veiculo','posto')->get();

		$veiculos			= Veiculo::with('base','secretaria','abastecimentos')->get();
		//dd($veiculos);
		
		return view('abastecimento.lista',compact('abastecimentos'));
	}


	public function create()
	{
		
		$combustiveis   = pegaValorEnum('veiculos', 'combustivel');
		sort($combustiveis); //ordena os combustíveis

		$veiculos    = Veiculo::orderBy('placa')->get();
		$postos      = Posto::orderBy('nome')->get();


		return view('abastecimento.create',compact('veiculos','postos'));
	}

	public function store(Request $request)
	{
		//inicia sessão de banco
		DB::beginTransaction();
		
		$request->merge(['posto_id' 		=>  	$request->posto 	]);
		$request->merge(['combustivel' 	=> 	$request->optionsRadios	]);
		$request->merge(['valor' 			=> 	$request->valor_combustivel	]);
		$request->merge(['qtd' 				=> 	str_replace(',', '.', $request->qtd) ]);
		
		
		
		$this->validate($request,[
			'veiculo_id'		=> 'required',
			'posto_id'			=> 'required',
			'qtd'					=> 'required',
			'valor'				=> 'required',
			'combustivel'		=> 'required',
			]);
			
			//dd($request->all());
			

		// Criar um novo abastecimento
      $novoAbastecimento = Abastecimento::create($request->all());

		if($novoAbastecimento){
			DB::commit();
			return redirect('abastecimento')->with('sucesso', 'Abastecimento criado com sucesso!');
		} else {
    		//Fail, desfaz as alterações no banco de dados
			DB::rollBack();
			return back()->withInput()->with('error', 'Falha ao criar o Abastecimento.');    
		}

	}

	public function show(Veiculo $veiculo)
	{
		//
	}

	public function edit(Veiculo $veiculo)
	{
	
	}

	
	public function update(Request $request, Veiculo $veiculo)
	{
	
	}

	public function destroy( $id)
	{
	
	}
}
