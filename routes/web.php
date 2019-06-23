<?php

Auth::routes();
Route::get ('/logout', 					'Auth\LoginController@logout');
Route::get ('/', 							'HomeController@index');


// Rota para alterar o perfil do usuário atual
Route::get ('perfil',        			'UserController@perfil');
Route::post ('perfil',        		'UserController@update_avatar');


// Rota para alterar a senha do usuário atual
Route::post("alterarsenha", 			"UserController@alterarSenha");

// Rota para o ADMINISTRADOR alterar a senha de qualquer usuario
Route::post("mudarsenha", 				"UserController@mudarsenha");

// teste calendario
Route::get ('calendario',				'CalendarioController@index');

Route::post('lojas/potencia/store', 'PotenciaController@store');

Route::post('lojas/nova_ajax', 		'LojaController@nova_ajax');

//caminho para alterar o status do usuario ATIVO/INATIVO
Route::post('/mudastatus',				'UserController@MudaStatus');

//caminho para DESASSOCIAR um Membro do Usuário
Route::post('/desassocia',				'UserController@desassocia');

//caminho para ASSOCIAR um Membro do Usuário
Route::get('/associa/{id}',			'UserController@associa');
Route::post('/associa',					'UserController@salvaAssociacao');


//========================================================================================
// 										EMAIL
//========================================================================================
//caminho para envio de emails
Route::post('/senhausuario',			'EmailController@EnviarSenhaUsuario');
Route::post('/zerarsenhausuario',	'EmailController@ZerarSenhaUsuario');


//resources
Route::resource('membros', 			'MembroController');
Route::resource('visitantes',			'VisitanteController');
Route::resource('lojas', 				'LojaController');
Route::resource('usuarios', 			'UserController');
Route::resource('sessoes', 			'SessaoController');
Route::resource('setups', 				'SetupController');
Route::resource('presencas', 			'PresencaController');













//Route::group(['prefix' => 'irmaos'],function(){
//	Route::get ('/',              	'IrmaoController@index');
//	Route::get ('/create',        	'IrmaoController@create');
//	Route::get ('/edit/{id}',			'IrmaoController@edit');
//	Route::get ('/update/{id}',		'IrmaoController@update');
//	Route::get ('/show/{id}',			'IrmaoController@show');
//	Route::get ('/destroy/{id}',		'IrmaoController@destroy');
//	Route::post('/store',       		'IrmaoController@store');
	//
//});




// Route::group(['prefix' => 'lojas'],function(){
// 	Route::get ('/',              	'LojaController@index');
// 	Route::get ('/create',        	'LojaController@create');
// 	Route::get ('/edit/{id}',			'LojaController@edit');
// 	Route::put ('/update/{id}',		'LojaController@update');
// 	Route::delete ('/destroy/{id}',	'LojaController@destroy');
// 	Route::get ('/{id}',					'LojaController@show');
// 	Route::post('/store',       		'LojaController@store');

// 	Route::post('/potencia/store', 	'PotenciaController@store');

// });


