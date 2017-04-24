<?php


Auth::routes();
Route::get ('/logout', 				'Auth\LoginController@logout');
Route::get ('/', 					'HomeController@index');

Route::group(['prefix' => 'irmaos'],function(){
	Route::get ('/',               	'IrmaoController@index');
	Route::get ('/novo',          	'IrmaoController@novo');
	Route::get ('/{id}/edita',		'IrmaoController@edita');
	Route::get ('/{id}/exclui',		'IrmaoController@exclui');
	Route::post('/salva',       	'IrmaoController@salva');
});


Route::resource('/lojas', 'LojaController');

//=============================================================================

Route::get('/categoria/{idCategoria}', function($idCategoria){
	return " Posts da categoria {$idCategoria}";
});

//não precisa passar o parametro, se não passar ele usa o default 
Route::get('/categoria2/{idCategoria?}', function($idCategoria='valor_padrao'){
	return " Posts da categoria {$idCategoria}";
});


// 'middleware' => 'Auth' -> só libera acesso se autenticado AQUI NAS ROTAS
Route::group(['prefix' => 'painel', 'middleware' => 'auth' ], function(){
	Route::get('/grupo1', function(){
		return " Grupo 1";
	});

	Route::get('/grupo2', function(){
		return " Grupo 2";
	});
});