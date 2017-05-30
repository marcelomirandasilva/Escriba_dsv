<?php


Auth::routes();
Route::get ('/logout', 				'Auth\LoginController@logout');
Route::get ('/', 					'HomeController@index');

Route::group(['prefix' => 'irmaos'],function(){
	Route::get ('/',               	'IrmaoController@index');
	Route::get ('/create',         	'IrmaoController@create');
	Route::get ('/edit/{id}',		'IrmaoController@edit');
	Route::get ('/update/{id}',		'IrmaoController@update');
	Route::get ('/show/{id}',		'IrmaoController@show');
	Route::get ('/destroy/{id}',	'IrmaoController@destroy');
	Route::post('/store',       	'IrmaoController@store');
	
});


Route::group(['prefix' => 'lojas'],function(){
	Route::get ('/',               	'LojaController@index');
	Route::get ('/create',          'LojaController@create');
	Route::get ('/edit/{id}',		'LojaController@edit');
	Route::put ('/update/{id}',		'LojaController@update');
	Route::get ('/destroy/{id}',	'LojaController@destroy');
	Route::get ('/show/{id}',		'LojaController@show');
	Route::post('/store',       	'LojaController@store');

	Route::post('/potencia/store', 	'PotenciaController@store');

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