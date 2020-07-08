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

//Listando cards
Route::get('/', 'CardsController@index');
//Criando cards
Route::post('/', 'CardsController@create');
//Alterando cards
Route::put('/{id}', 'CardsController@edit');

