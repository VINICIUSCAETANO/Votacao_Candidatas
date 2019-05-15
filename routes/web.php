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

Route::resource('candidatas', 'CandidataController')->middleware('auth');
Route::resource('votos', 'VotoController');
Route::resource('concurso', 'ConcursoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('candidatas/votar/{id}', ['as'=>'Candidata.votar', 'uses'=>'CandidataController@votar']);
Route::get('home',['as'=>'home', 'uses'=>'CandidataController@home']);