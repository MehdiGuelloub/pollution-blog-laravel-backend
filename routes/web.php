<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/blogueurs/affichage', 'BlogueurController@affichage');
Route::get('/blogueurs/bannir/{id}', 'BlogueurController@bannir');
Route::get('/blogueurs/debannir/{id}', 'BlogueurController@debannir');

Route::get('/publications/affichage', 'PublicationController@affichage');
Route::get('/publications/supprimer/{id}', 'PublicationController@supprimer');

Route::get('/commentaires/affichage', 'CommentairesController@affichage');
Route::get('/commentaires/supprimer/{id}', 'CommentairesController@supprimer');

Route::get('/connect/{id}', 'SessionController@verifier');
Route::get('/disconnect/{id}', 'SessionController@creer');
Route::get('/verifier', 'SessionController@fermer');