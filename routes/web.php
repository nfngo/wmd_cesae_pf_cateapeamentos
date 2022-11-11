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

//Apeamento
Route::get('apea/{apea}/edit', 'ApeaController@edit');
Route::put('apea/{apea}', 'ApeaController@update');

//Baldeaçao
Route::get('bald/{bald}/edit', 'BaldController@edit');
Route::put('bald/{bald}', 'BaldController@update');

//Lme
Route::get('lme', 'LmeController@index');
Route::get('lme/{lme}/edit', 'LmeController@edit');
Route::put('lme/{lme}', 'LmeController@update');

// Cabos
Route::get('cabos','CaboController@index');
Route::get('cabo/{cabo}/edit', 'CaboController@edit');
Route::put('cabo/{cabo}', 'CaboController@update');

// Tarifas
Route::get('tarifas','TarifaController@index');
Route::get('tarifa/{tarifa}/edit', 'TarifaController@edit');
Route::put('tarifa/{tarifa}', 'TarifaController@update');

<<<<<<< HEAD
//ControloApeamentos
Route::get('control-apea', 'ControloApeaController@index');
=======
Route::get('lme-board', 'LmeBoardController@index');

>>>>>>> db552b9a0d8857d4eb7e48896b4f4305d6f3d2fe
