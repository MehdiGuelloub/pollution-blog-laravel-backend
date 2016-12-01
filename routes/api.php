<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/publication', 'PublicationController@findAll');
Route::get('/publication/{blogueur_id}', 'PublicationController@findById');
Route::post('/publication', 'PublicationController@create');

Route::post('/blogueur', 'BlogueurController@create');
Route::get('/blogueur', 'BlogueurController@findAll');
Route::get('/blogueur/{blogueur_id}', 'BlogueurController@findById');
Route::get('/blogueur/mail/{blogueur_email}', 'BlogueurController@findByMail');

Route::get('/commentaire/{publication_id}', 'CommentairesController@findByPublicationId');
Route::post('/commentaire', 'CommentairesController@create');