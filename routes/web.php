<?php


Auth::routes();
Route::get ('/logout', 				'Auth\LoginController@logout');
Route::get ('/', 					'HomeController@index');

Route::group(['prefix' => 'irmaos'],function(){
	Route::get ('/',               	'IrmaoController@index');
	Route::get ('/create',         	'IrmaoController@create');
	Route::get ('/{id}/edit',		'IrmaoController@edit');
	Route::get ('/{id}/update',		'IrmaoController@update');
	Route::get ('/{id}/show',		'IrmaoController@show');
	Route::get ('/{id}/destroy',	'IrmaoController@destroy');
	Route::post('/store',       	'IrmaoController@store');
	
});


Route::group(['prefix' => 'lojas'],function(){
	Route::get ('/',               	'LojaController@index');
	Route::get ('/create',          'LojaController@create');
	Route::get ('/{id}/edit',		'LojaController@edit');
	Route::put ('/{id}/update',		'LojaController@update');
	Route::get ('/{id}/destroy',	'LojaController@destroy');
	Route::get ('/{id}/show',		'LojaController@show');
	Route::post('/store',       	'LojaController@store');

});



//Route::resource('/lojas', 'LojaController');

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