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


//Url padrão para pagina principal
Route::get('/','ContatoController@index');

//Url padrão retornar pagina de alterar
Route::get('/contato/{contato}','ContatoController@show');

//Url padrão para criar novo contato
Route::post('/contato','ContatoController@store');

//Url padrão para atualizar contato
Route::patch('/contato/{contato}','ContatoController@update');

//Url padrão para deletar contato
Route::delete('/contato/{contato}','ContatoController@destroy');