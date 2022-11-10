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

Route::get('/','EstadosController@index');

Auth::routes();

Route::get('estados', 'EstadosController@index');
Route::get('estados/search', 'EstadosController@search');

<<<<<<< HEAD

//Apeamento
Route::get('apea/{apea}/edit', 'ApeaController@edit');
Route::put('apea/{apea}', 'ApeaController@update');

//Baldeaçao
Route::get('bald/{bald}/edit', 'BaldController@edit');
Route::put('bald/{bald}', 'BaldController@update');

=======
Route::get('lme', 'LmeController@index');
>>>>>>> ef911e5a1f74e797d1f4a5268ade82be481be4b8
