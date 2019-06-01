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

	Route::get('principal', function () {return view('content.principal');})->name('principal');

	Route::post('logout', 'Auth\LoginController@logout')->name('logout');

});

Route::resource('usuario','UsuarioController');


Route::resource('detallecentro','DetalleCentroController');

Route::resource('centro','CentroController');

Route::resource('deporte','DeporteController');

Route::resource('estadocancha','EstadoCanchaController');

Route::resource('calendario','CalendarioController');

// Route::get('content.contenido', 'HomeController@index')->name('home');

