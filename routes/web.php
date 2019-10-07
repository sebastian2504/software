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
/*
Route::get('/control/{nombre?}/{edad?}',function($nombre="Danielito",$edad=null){
		return view('control',array(
			"nombre" => $nombre,
			"edad" => $edad
		));
	});


Route::get('/', function () {
	return view('welcome');
});

Route::post('/hola-mundo',function(){
	return 'Creación de ruta básica en laravel';
});

Route::get('/contacto',function(){
	return view('contacto');
});



/*Route::match(['get', 'post'], '/contacto', function () {
    return view('contacto');
});
*/
/*
Route::any('/contacto', function () {
    return view('contacto');
});

Route::match(['get','post'],'/ubicanos',function(){
	return view('ubicanos');
});

*/


/*Route::get('/contacto/{nombre?}/{edad?}',function($nombre="Oscar",$edad=67){
	return view('contacto/contacto',array(
		"nombre" => $nombre,
		"edad" => $edad
	));

});
*/

/*Route::get('/contacto/{nombre?}/{edad?}',function($nombre="Oscar",$edad=67){
	return view('contacto/contacto')
}*/
/*Route::get('/contacto/{nombre?}/{edad?}',function($nombre="Oscar",$edad=null){
	return view('contacto',array(
		"nombre" => $nombre,
		"edad" => $edad
	));

});
*/
/*Route::get('/contacto/{nombre?}/{edad?}',function($nombre="Oscar",$edad=67){
	return view('contacto/contacto')
	->with ('nombre', $nombre)
	->with ('edad', $edad);
})-> where([
	'nombre' => '[A-Za-z\s?]+',
	'nombre' => '^(?!\s)[-a-zA-Z ]*(?<!\s)$',
	'edad' => '[0-9]+'
]);*/


Route::get('/webdev', [
	'uses' => 'MessageControllera@mostrarMensajeColor']);

Route::get('/validaNull/{nombre?}/{edad?}',function($nombre="Oscar",$edad=null){
	return view('validaNull',array(
		"nombre" => $nombre,
		"edad" => $edad
	));

});

Route::get('/contacto/{nombre?}/{edad?}',function($nombre="Oscar",$edad=null){
	return view('contacto/contacto',array(
		"nombre" => $nombre,
		"edad" => $edad
	));

});
/*
Route::get('/', function () {
	return view('welcome');
});

Route::get('/boton', function () {
	return view('contacto/boton');
});

Route::get('/boton3d', function () {
	return view('contacto/boton3d');
});
*/

Route::get('/nombreEstatico', function () {
	return view('vistaEstatica');
});

Route::get('/webdev', function () {
	return view('webdev');
});
