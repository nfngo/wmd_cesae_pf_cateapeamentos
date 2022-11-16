<?php

use App\Exports\RelatoriosExport;
use App\Http\Controllers\RelatorioController;
use App\Relatorio;
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

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function () {
        return redirect('/estados');
    });

    Route::get('estados', 'EstadosController@index');
    Route::get('estados/search', 'EstadosController@search');

    Route::group(['middleware' => 'isAdmin'], function () {
        //Apeamento
        Route::prefix('apea')->group(function (){
            Route::get('{apea}/edit', 'ApeaController@edit');
            Route::put('{apea}', 'ApeaController@update');
            Route::post('{id}', 'ApeaController@updateFaturado')->name('updateFaturado');
        });
        //Baldeaçao
            Route::get('bald/{bald}/edit', 'BaldController@edit');
            Route::put('bald/{bald}', 'BaldController@update');
    });

    Route::group(['middleware' => 'isAdmin'], function () {
    //Lme
    Route::prefix('lme')->group(function(){
//        Route::get('', 'LmeController@index');
//        Route::get('{lme}/edit', 'LmeController@edit');
//        Route::get('create', 'LmeController@create');
//
            Route::put('{lme}', 'LmeController@update');
            Route::post('', 'LmeController@store');
            Route::delete('{lme}', 'LmeController@destroy');
        });
        // Cabos
        Route::prefix('cabos')->group(function (){
//            Route::get('','CaboController@index');
//            Route::get('{cabo}/edit', 'CaboController@edit');
            Route::put('{cabo}', 'CaboController@update');
        });
        // Tarifas
        Route::prefix('tarifas')->group(function (){
//            Route::get('','TarifaController@index');
//            Route::get('{tarifa}/edit', 'TarifaController@edit');
            Route::put('{tarifa}', 'TarifaController@update');
        });
    });

    //ControloApeamentos
    Route::get('control-apea', 'ControloApeaController@index');
    Route::get('control-apea/search', 'ControloApeaController@search');

    //LME BOARD
    Route::get('lme-board', 'LmeBoardController@index');

    //Export
    Route::get('relatorio', 'RelatorioController@index');
    Route::get('relatorio/export', [RelatorioController::class, 'export']);
});
