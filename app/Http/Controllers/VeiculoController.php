<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Illuminate\Http\Request;

use App\Models\Secretaria;
use App\Models\Veiculo;
use App\Models\Base;
use App\Models\User;
use App\Models\Posto;



class VeiculoController extends Controller
{
/* 	public function __construct()
	{
	  $this->middleware('auth');

	}
 */

	public function index()
	{
		//$usuario_logado     = User::find(Auth::user()->id);

		$usuario_logado = session()->get('funcionario_logado');

		$veiculos           = Veiculo::with('base','secretaria')->get();

		//dd($veiculos);

		return view('veiculo.lista',compact('veiculos','usuario_logado'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$combustiveis   = pegaValorEnum('veiculos', 'combustivel');
		sort($combustiveis); //ordena os combustíveis

		$secretarias    = Secretaria::orderBy('nome')->get();
		$bases          = Base::orderBy('nome')->get();

		return view('veiculo.create',compact('secretarias','combustiveis','bases'));
	}

	public function store(Request $request)
	{
		//inicia sessão de banco
		DB::beginTransaction();

		$request->merge(['placa' => str_replace('-', "", $request->placa)]);
		$request->merge(['renavam' => str_replace('.', "", $request->renavam)]);

		
		$this->validate($request,[
			'placa'				=> 'required|min:7|unique:veiculos',
			'modelo'				=> 'required|min:3',
			'cor'					=> 'required|min:3',
			'ano'					=> 'digits:4|integer|min:2000|max:'.(date('Y')+1),
			'renavan'			=> 'digits:11|integer',
			'combustivel'		=> 'required',
			'secretaria_id'	=> 'required',
			'base_id'			=> 'required',
		]);
			
		//dd($request->all());

		// Criar um novo veiculo
      $novoVeiculo = Veiculo::create($request->all());

		if($novoVeiculo){
			DB::commit();
			return redirect('veiculo')->with('sucesso', 'Veículo criado com sucesso!');
		} else {
    		//Fail, desfaz as alterações no banco de dados
			DB::rollBack();
			return back()->withInput()->with('error', 'Falha ao criar o Veículo.');    
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Veiculo  $veiculo
	 * @return \Illuminate\Http\Response
	 */
	public function show(Veiculo $veiculo)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Veiculo  $veiculo
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Veiculo $veiculo)
	{
		$combustiveis   	= pegaValorEnum('veiculos', 'combustivel');
		sort($combustiveis); //ordena os combustíveis

		$secretarias    	= Secretaria::orderBy('nome')->get();
		$bases          	= Base::orderBy('nome')->get();

		return view('veiculo.create',compact('veiculo','secretarias','combustiveis','bases'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Veiculo  $veiculo
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Veiculo $veiculo)
	{
		//inicia sessão de banco
		DB::beginTransaction();

		$request->merge(['placa' => str_replace('-', "", $request->placa)]);
		$request->merge(['renavam' => str_replace('.', "", $request->renavam)]);

		
		$this->validate($request,[
			'placa'				=> 'required|min:7|unique:veiculos,placa,' .$veiculo->id,
			'modelo'				=> 'required|min:3',
			'cor'					=> 'required|min:3',
			'ano'					=> 'digits:4|integer|min:2000|max:'.(date('Y')+1),
			'renavan'			=> 'digits:11|integer',
			'combustivel'		=> 'required',
			'secretaria_id'	=> 'required',
			'base_id'			=> 'required',
		]);
			
		
		// altera os dados do veiculo
      $veiculo->fill($request->all());
		$salvou_veiculo = $veiculo->save();

		if($salvou_veiculo){
			DB::commit();
			return redirect('veiculo')->with('sucesso', 'Veículo Alterado com sucesso!');
		} else {
    		//Fail, desfaz as alterações no banco de dados
			DB::rollBack();
			return back()->withInput()->with('error', 'Falha ao Alterar o Veículo.');    
		}
	}

	public function destroy( $id)
	{
		//inicia sessão de banco
		DB::beginTransaction();
		//deleta
		
		$apagou_veiculo = Veiculo::find($id)->delete();

		if($apagou_veiculo){
			DB::commit();
			return response('ok', 200);
		} else {
    		//Fail, desfaz as alterações no banco de dados
			DB::rollBack();
			return response('erro', 500);
		}
	}



	public function buscaPlaca( $placa)
	{
		$buscar = str_replace('-','',$placa);

		$veiculo = DB::table('veiculos')->where('placa', $buscar)->get();
	
		return response($veiculo);
	}

	public function buscaPosto( $id)
	{
		$posto = Posto::find($id);
	
		return response($posto);
	}
}
