<?php


Auth::routes();
Route::get ('/logout', 				'Auth\LoginController@logout');
Route::get ('/', 					'HomeController@index');

Route::get ('/perfil',        		'UserController@perfil');

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




Route::post('lojas/potencia/store', 	'PotenciaController@store');

Route::resource('membros', 			'MembroController');
Route::resource('lojas', 			'LojaController');

	
