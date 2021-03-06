<?php

namespace App\Http\Controllers;

use App\Models\Setup;
use Illuminate\Http\Request;

use App\Bibliotecas\Geral;

use App\Models\User;
use App\Models\Loja;
use App\Models\Pais;
use App\Models\Potencia;
use DB;



class SetupController extends Controller
{
	public function __construct(User $user)
	{
		 // todas as rotas aqui serão antes autenticadas
		 $this->middleware('auth');

		 //$this->middleware('is_administrador')->except(['alterarSenha']);
	}

	public function index()
	{
		
		$setup 	= Setup::find(1);
		
		$titulo = "Configuração da Loja";

		$potencias  	= Potencia::all()->sortBy('no_potencia');
		$paises     	= Pais::all()->sortBy('nome');        
		$ritos      	=  pegaValorEnum('lojas','ic_rito',true) ;
		$dias_sessao 	=  pegaValorEnum('setups','ic_dia_sessao') ;

		//dd($dias_sessao);


		return view('setups.create',compact('setup','titulo','potencias','paises','ritos','dias_sessao'));
	}

	public function create()
	{
		dd("hkjhkj");
	}

	public function store(Request $request)
	{
		dd($request->all());
	}

	public function show(Setup $setup)
	{
		//
	}

	public function edit(Setup $setup)
	{
		//
	}

	public function update(Request $request, Setup $setup)
	{
		//
	}

}
