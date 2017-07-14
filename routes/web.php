<?php

Auth::routes();
Route::get ('/logout', 					'Auth\LoginController@logout');
Route::get ('/', 						'HomeController@index');


// Rota para alterar o perfil do usuário atual
Route::get ('perfil',        			'UserController@perfil');
Route::post ('perfil',        			'UserController@update_avatar');


// Rota para alterar a senha do usuário atual
Route::post("alterarsenha", 			"UsersController@alterarSenha");

// Rota para o ADMINISTRADOR alterar a senha de qualquer usuario
Route::post("mudarsenha", 				"UsersController@mudarsenha");



Route::post('lojas/potencia/store', 	'PotenciaController@store');

//resources
Route::resource('membros', 				'MembroController');
Route::resource('lojas', 				'LojaController');
Route::resource('usuarios', 			'UserController');
	











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


