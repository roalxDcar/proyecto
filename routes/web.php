<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['guest']],function(){

	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login')->name('login1');

});
//autenticados en login
Route::group(['middleware'=>['auth']],function(){

	Route::get('usuario', function () {
		return 'usuario';})->name('usuario');

	Route::get('administrador', function () {
		return view('content.administrador');})->name('administrador');

	Route::get('empleado', function () {
		return view('content.empleado');})->name('empleado');

	Route::post('logout', 'Auth\LoginController@logout')->name('logout');

});

// Route::get('password/email','Auth\PasswordController@getEmail');
// Route::post('password/email','Auth\PasswordController@postEmail');


Route::resource('usuario','UsuarioController');

Route::resource('detallecentro','DetalleCentroController');

Route::resource('centro','CentroController');

Route::resource('deporte','DeporteController');

Route::resource('estadocancha','EstadoCanchaController');

Route::resource('calendario','CalendarioController');

// Route::get('content.contenido', 'HomeController@index')->name('home');

