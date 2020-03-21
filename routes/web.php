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


//rota para pagina principal
Route::get('/','ContatoController@index');

//rota para retornar pagina de alterar
Route::get('/contato/{contato}','ContatoController@show');

//rota para criar novo contato
Route::post('/contato','ContatoController@store');