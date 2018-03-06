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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/escuelas', 'HomeController@escuela')->name('escuelas');
Route::get('/usuarios', 'HomeController@users')->name('usuarios');
Route::get('/agendar', 'HomeController@agenda')->name('agendar');
Route::get('/perfilesusuarios', 'HomeController@perfil')->name('perfilesusuarios');

Route::get('/calc', 'HomeController@calculo')->name('calc');
Route::get('/brig', 'HomeController@brigadista')->name('brig');
Route::get('/secret', 'HomeController@secretaria')->name('secret');
Route::get('/repor', 'HomeController@reportes')->name('repor');