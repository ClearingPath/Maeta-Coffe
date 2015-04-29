<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('menu/create', 'MenuController@input');

Route::get('menu/update', 'MenuController@showMenus');

Route::get('menu/detail/{id_menu}', 'MenuController@showMenuDetail');

Route::get('menu/pesanan', 'MenuController@pesanan');

Route::post('menu/addMenuSuccess', 'MenuController@add_menu');

Route::post('menu/addPesananSuccess', 'MenuController@add_pesanan');

Route::get('bahan/edit/{id_bahan}', 'BahanController@edit_bahan');

Route::get('bahan/delete/{id_bahan}', 'BahanController@delete_bahan');

Route::get('menu/histori', 'MenuController@show_history');

Route::post('bahan/editBahanSuccess', 'BahanController@edit_bahan_proceed');

Route::get('bahan/show', 'BahanController@daftar');

Route::get('bahan/create', 'BahanController@create');

Route::post('bahan/addBahanSuccess', 'BahanController@add_bahan');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
