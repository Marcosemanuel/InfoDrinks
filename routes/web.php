<?php
Route::resource('bebidas', 'BebidasController');
Route::resource('petiscos', 'PetiscosController');
Route::resource('musicas', 'MusicasController');
Route::resource('jogos', 'JogosController');
Route::resource('comentarios', 'ComentariosController');
Route::resource('tabuleiros', 'TabuleirosController');
Route::resource('/', 'IndexController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


