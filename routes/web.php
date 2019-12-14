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
    return view('welcome');
});

Route::get('Semestre','SemestreController@index');
Route::post('guardarSemestre','SemestreController@guardar');
Route::get('eliminarSemestre/{id}','SemestreController@dele');
Route::get('editarSemestre/{id}','SemestreController@editar');
Route::post('updateSemestre/{id}','SemestreController@update');

Route::post('GuardarEstudiante','EstudianteController@guardar_car');
Route::get('Estudiante','EstudianteController@index');
Route::get('eliminarEstudiante/{id}','EstudianteController@dele');
Route::get('editarEstudiante/{id}','EstudianteController@editar');
Route::post('updateEstudiante/{id}','EstudianteController@update');
Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
