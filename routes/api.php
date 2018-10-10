<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('citas', 'CitasController');
Route::resource('doctores', 'DoctoresController');
Route::resource('dueños', 'DueñosController');
Route::resource('mascotas', 'MascotasController');
Route::resource('medicamentos', 'MedicamentosController');
Route::resource('operaciones', 'OperacionesController');
Route::resource('preinscripciones', 'PreinscripcionesController');
Route::resource('urgencias', 'UrgenciasController');
Route::resource('vacunas', 'VacunasController');