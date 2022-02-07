<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/Persona /estudiante2', function(){
    return  'Nombre del alumno: ';
});
Route::get('/persona/estudiante', function(){
    return  view('estudiante');
});
Route::get('/persona/docente', function(){
    return  view('docente');
});
Route::get('/persona/administrativo', function(){
    return  view('administrativo');
});