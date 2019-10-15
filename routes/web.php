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

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/usuario', function () {
    return view('usuario');
});


Route::get('/', 'Auth\LoginController@showLoginform')->middleware('guest');

Route::post('registro', 'Auth\RegisterController@registrar')->name('registro');

Route::get('usuario', 'DashboardController@index')->name('usuario');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Listar Videos del Usuario
Route::get('/videosListarTodos', 'VideosController@index');		//Todos los videos
Route::get('/videosListar/{id}', 'VideosController@show');		//Listar Todos los Videos del Usuario

//Crear Videos
Route::get('/videosCrear', 'VideosController@create');
Route::post('/registrarVideo', 'VideosController@store');

//Editar Videos
Route::get('/videosEditar/{id}', 'VideosController@edit');
Route::POST('/actualizarVideo/{video}', 'VideosController@update');
