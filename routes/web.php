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

Route::get('/conteudos', function () {
    return view('conteudos.index');
})->name('conteudos.index');

Route::get('/guias', function () {
    return view('guia.index');
})->name('guias.index');

Route::get('/tri', function () {
    return view('tri.index');
})->name('tri.index');

Route::resource('questoes', 'QuestaoController', [
    'parameters' => [
        'questoes' => 'questoes'
    ]
]);

Route::resource('questoes.alternativas', 'QuestaoAlternativaController', [
    'parameters' => [
        'questoes' => 'questoes'
    ],
    'only' => [
        'create',
        'store',
    ]
]);

Route::get(
    '/questoes/{questoes}/alternativas/{alternativas}/delete', 
    'QuestaoAlternativaController@destroy'
)->name('questoes.alternativas.delete');
