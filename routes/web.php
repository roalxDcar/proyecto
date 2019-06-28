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

	// Route::get('usuario', function () {
	// 	return view('content.usuario');})->name('usuario');

	Route::resource('usuario','PrincipalController');

	Route::get('empleado', function () {
		return view('content.empleado');})->name('empleado');

	Route::get('administrador', function () {
		return view('content.administrador');})->name('administrador');

	Route::get('admin', function () {
		return view('content.admin');})->name('admin');

	Route::post('logout', 'Auth\LoginController@logout')->name('logout');

});

// Route::get('password/email','Auth\PasswordController@getEmail');
// Route::post('password/email','Auth\PasswordController@postEmail');

// Route -> Admin (Administrador de todos los centros deportivos)
Route::resource('ad_personal','UsuarioController');
//BUSCADOR
Route::resource('buscador','BuscadorController');
// Route -> Administrador delcentro (Administrador de todos los centros deportivos)
Route::resource('personal','PersonalController');
Route::resource('perfil','PerfilController');

Route::resource('horario','HorarioController');
Route::resource('reserva','ReservaController');
Route::resource('cancha_usuario','CanchausuarioController');

Route::resource('ad_detallecentro','DetalleCentroController');

Route::resource('ad_centro','CentroController');

Route::resource('ad_caractercancha','CaractercanchaController');

Route::resource('ad_deporte','DeporteController');

Route::resource('calendario','CalendarioController');


Route::resource('detallecancha','DetalleCanchaController');

Route::resource('cancha','CanchaController');

Route::resource('area','AdminCanchaController');

Route::resource('promocion','PromocionController');

Route::resource('caracteristica','CaractercanchaController');

Route::resource('horario_admin','HorarioadminController');

Route::resource('user','UserController');
Route::resource('comentario','ComentarioController');


// Route::get('content.contenido', 'HomeController@index')->name('home');
