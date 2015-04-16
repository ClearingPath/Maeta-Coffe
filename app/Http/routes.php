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

Route::get('template', 'HomeController@template');

Route::get('lihatbahanbaku', 'HomeController@lihatBahanBaku');

Route::get('editbahanbaku', 'HomeController@editBahanBaku');

Route::get('inputbahanbaku', 'HomeController@inputBahanBaku');

Route::get('lihatdaftaranggaran', 'HomeController@lihatDaftarAnggaran');

Route::get('detailanggaran', 'HomeController@detailAnggaran');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
