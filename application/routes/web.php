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
    return view('layouts.home');
})->name('home');

Route::prefix('/problema')->group(function () {
    Route::get('/um', 'HomeController@problemaUm')->name('problema-um');
    Route::get('/dois', 'HomeController@problemaDois')->name('problema-dois');
    Route::get('/tres', 'HomeController@problemaTres')->name('problema-tres');
    Route::get('/quatro', 'HomeController@problemaQuatro')->name('problema-quatro');
    Route::post('/quatro/resolucao', 'ProblemaQuatroController@resolucao')->name('problema-quatro-resolucao');
});
