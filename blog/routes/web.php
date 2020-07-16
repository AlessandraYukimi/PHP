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

// home
Route::get('/', function(){
    return view('welcome');
});

//Listando cards
Route::get('/cards', 'CardsController@index');

//Criando cards
Route::get('/cards/add', 'CardsController@add');
Route::post('/cards/add', 'CardsController@create');

//Alterando cards
Route::get('/cards/update/{id}', 'CardsController@edit');
Route::put('/cards/update/{id}', 'CardsController@update');

//Deletando cards
Route::delete('/cards/remove/{id}', 'CardsController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
