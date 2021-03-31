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

Route::get('/', function () {
   return redirect()->route('home');
});


Route::get('/nosotros', array(
'as' => 'nosotros',
'uses'=>'HomeController@nosotros'
));

Route::get('hola/', function () {
    return view('hola');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/crear-animal', array(
'as' => 'crearAnimal',
'middleware' => 'auth',
'uses'=>'AnimalController@crearAnimal'
));

Route::post('/guardar-animal', array(
'as' => 'saveAnimal',
'middleware' => 'auth',
'uses'=>'AnimalController@saveAnimal'
));

Route::get('/adoptar', array(
'as' => 'adoptar',
'uses'=>'AnimalController@index'
));

Route::get('/eliminarAnimal/{animal_id}', array(
'as' => 'eliminarAnimal',
'middleware' => 'auth',
'uses'=>'AnimalController@eliminar'
));

Route::get('/editar/{animal_id}', array(
'as' => 'editarAnimal',
'uses'=>'AnimalController@editar'
));

Route::post('/Animal-editar/{animal_id}', array(
'as' => 'AnimalEditar',
'middleware' => 'auth',
'uses'=>'AnimalController@actualizar'
));

/*       LARAVEL 5.2 -> ENLACE SIMBOLICO EN LARAVEL 5.7
Route::get('/miniatura/{filename}', array(
'as' => 'videoImage',
'uses'=>'>AnimalController@getImage'
));
*/

// -------------CARRERAS--------------

Route::get('/carreras', array(
'as' => 'CarrerasUVM',
'middleware' => 'auth',
'uses'=>'CarreraController@index'
));

Route::get('/carrera/{carrera_id}', array(
'as'=>'detalleCarrera',
'uses'=>'CarreraController@detalle'
));

Route::post('/CarreraEdit/{carrera_id}', array(
'as' => 'CarreraEdit',
'middleware' => 'auth',
'uses'=>'CarreraController@actualizar'
));

Route::get('/eliminarCarrera/{carrera_id}', array(
'as' => 'eliminarCarrera',
'middleware' => 'auth',
'uses'=>'CarreraController@eliminar'
));

Route::get('/crearCarrera', array(
'as' => 'crearCarrera',
'middleware' => 'auth',
'uses'=>'CarreraController@crear'
));

Route::post('/guardar-carrera', array(
'as' => 'guardarCarrera',
'middleware' => 'auth',
'uses'=>'CarreraController@guardar'
));

// -------------FIN CARRERAS--------------


//---------------ADOPTANTE-------------

Route::get('/Adoptante/{animal_id}', array(
'as' => 'Adoptante',
'uses'=>'AdoptanteController@adoptar'
));

Route::post('/crear-adoptante/{animal_id}', array(
'as' => 'crearAdoptante',
'uses' => 'AdoptanteController@crear'
));

Route::get('/adoptantes', array(
'as' => 'Adoptantes',
'middleware' => 'auth',
'uses'=>'AdoptanteController@index'
));

Route::get('/eliminarAdoptante/{adoptante_id}', array(
'as' => 'eliminarAdoptante',
'middleware' => 'auth',
'uses'=>'AdoptanteController@eliminar'
));

//---------------FIN ADOPTANTE------------

//---------------VOLUNTARIO------------
Route::get('/voluntario', array(
'as' => 'Voluntario',
'uses'=>'VoluntarioController@voluntario'
));

Route::post('/crear-voluntario', array(
'as' => 'crearVoluntario',
'uses' => 'VoluntarioController@crear'
));

Route::get('/aceptarVoluntario/{voluntario_id}', array(
'as' => 'aceptarVoluntario',
'middleware' => 'auth',
'uses' => 'VoluntarioController@aceptar'
));

Route::get('/voluntarios', array(
'as' => 'Voluntarios',
'middleware' => 'auth',
'uses'=>'VoluntarioController@index'
));

Route::get('/eliminarVoluntario/{voluntario_id}', array(
'as' => 'eliminarVoluntario',
'middleware' => 'auth',
'uses'=>'VoluntarioController@eliminar'
));

Route::get('/comunidad', array(
'as' => 'Comunidad',
'middleware' => 'auth',
'uses'=>'VoluntarioController@comunidad'
));

//----------------AVISOS---------------------

Route::get('/crear-aviso', array(
'as' => 'crearAviso',
'middleware' => 'auth',
'uses'=>'HomeController@aviso'
));

Route::post('/guardar-aviso', array(
'as' => 'guardarAviso',
'middleware' => 'auth',
'uses'=>'HomeController@crear'
));

Route::get('/eliminarAviso/{aviso_id}', array(
'as' => 'eliminarAviso',
'middleware' => 'auth',
'uses'=>'HomeController@eliminar'
));

//--------------USUARIO------------------

Route::get('/crear-usuario', array(
'as' => 'crearuser',
'middleware' => 'auth',
'uses'=>'UsuarioController@create'
));

Route::post('/guardar-usuario', array(
'as' => 'crearUsuario',
'middleware' => 'auth',
'uses'=>'UsuarioController@save'
));

Route::get('/usuarios', array(
'as' => 'Usuarios',
'middleware' => 'auth',
'uses'=>'UsuarioController@index'
));

Route::get('/eliminarUsuario/{usuario_id}', array(
'as' => 'eliminarUsuario',
'middleware' => 'auth',
'uses'=>'UsuarioController@eliminar'
));

Route::get('/editar-usuario', array(
'as' => 'gestionuser',
'middleware' => 'auth',
'uses'=>'UsuarioController@gestion'
));

Route::post('/usuario-editar', array(
'as' => 'usuarioEditar',
'middleware' => 'auth',
'uses' => 'UsuarioController@update'
));