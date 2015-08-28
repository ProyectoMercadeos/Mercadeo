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

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//rutas para el recurso ciudades 
Route::resource('Ciudades','CiudadesController');
//una nueva para eliminar registros con el metodo get
Route::get('Ciudades/destroy/{id}', ['as' => 'Ciudades/destroy', 'uses'=>'CiudadesController@destroy']);
//ruta para realizar busqueda de registrosCiudadesController
Route::post('Ciudades/search', ['as' => 'Ciudades/search', 'uses'=>'CiudadesController@search']);

//rutas para el recurso DOFA
Route::resource('DOFA','DOFAController');
//una nueva para eliminar registros con el metodo get
Route::get('DOFA/destroy/{id}', ['as' => 'DOFA/destroy', 'uses'=>'DOFAController@destroy']);
//ruta para realizar busqueda de registros
Route::post('DOFA/search', ['as' => 'DOFA/search', 'uses'=>'DOFAController@search']);

//rutas para el recurso Empresas
Route::resource('Empresas','EmpresasController');
//una nueva para eliminar registros con el metodo get
Route::get('Empresas/destroy/{id}', ['as' => 'Empresas/destroy', 'uses'=>'EmpresasController@destroy']);
//ruta para realizar busqueda de registros
Route::post('Empresas/search', ['as' => 'Empresas/search', 'uses'=>'EmpresasController@search']);

//rutas para el recurso Encuestas
Route::resource('Encuestas','EncuestasController');
//una nueva para eliminar registros con el metodo get
Route::get('Encuestas/destroy/{id}', ['as' => 'Encuestas/destroy', 'uses'=>'EncuestasController@destroy']);
//ruta para realizar busqueda de registros
Route::post('Encuestas/search', ['as' => 'Encuestas/search', 'uses'=>'EncuestasController@search']);

//rutas para el recurso Funcionarios
Route::resource('Funcionarios','FuncionariosController');
//una nueva para eliminar registros con el metodo get
Route::get('Funcionarios/destroy/{id}', ['as' => 'Funcionarios/destroy', 'uses'=>'FuncionariosController@destroy']);
//ruta para realizar busqueda de registros
Route::post('Funcionarios/search', ['as' => 'Funcionarios/search', 'uses'=>'FuncionariosController@search']);

//rutas para el recurso Localidades
Route::resource('Localidades','LocalidadesController');
//una nueva para eliminar registros con el metodo get
Route::get('Localidades/destroy/{id}', ['as' => 'Localidades/destroy', 'uses'=>'LocalidadesController@destroy']);
//ruta para realizar busqueda de registros
Route::post('Localidades/search', ['as' => 'Localidades/search', 'uses'=>'LocalidadesController@search']);

//rutas para el recurso Preguntas
Route::resource('Preguntas','PreguntasController');
//una nueva para eliminar registros con el metodo get
Route::get('Preguntas/destroy/{id}', ['as' => 'Preguntas/destroy', 'uses'=>'PreguntasController@destroy']);
//ruta para realizar busqueda de registros
Route::post('Preguntas/search', ['as' => 'Preguntas/search', 'uses'=>'PreguntasController@search']);

//rutas para el recurso Recomendaciones
Route::resource('Recomendaciones','RecomendacionesController');
//una nueva para eliminar registros con el metodo get
Route::get('Recomendaciones/destroy/{id}', ['as' => 'Recomendaciones/destroy', 'uses'=>'RecomendacionesController@destroy']);
//ruta para realizar busqueda de registros
Route::post('Recomendaciones/search', ['as' => 'Recomendaciones/search', 'uses'=>'RecomendacionesController@search']);

//rutas para el recurso Respuestas
Route::resource('Respuestas','RespuestasController');
//una nueva para eliminar registros con el metodo get
Route::get('Respuestas/destroy/{id}', ['as' => 'Respuestas/destroy', 'uses'=>'RespuestasController@destroy']);
//ruta para realizar busqueda de registros
Route::post('Respuestas/search', ['as' => 'Respuestas/search', 'uses'=>'RespuestasController@search']);

//rutas para el recurso Tipo_Preguntas
Route::resource('Tipo_Preguntas','Tipo_PreguntasController');
//una nueva para eliminar registros con el metodo get
Route::get('Tipo_Preguntas/destroy/{id}', ['as' => 'Tipo_Preguntas/destroy', 'uses'=>'Tipo_PreguntasController@destroy']);
//ruta para realizar busqueda de registros
Route::post('Tipo_Preguntas/search', ['as' => 'Tipo_Preguntas/search', 'uses'=>'Tipo_PreguntasController@search']);