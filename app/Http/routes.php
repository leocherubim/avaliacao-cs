<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Validacao da variavel id da rota
 */
Route::pattern('id', '[0-9]+');

Route::get('/', function () {
    return view('welcome');
});

/*
 * Grupo de rotas para o CRUD de Artist
 */
Route::group(['prefix'=>'artist'], function() {

	Route::get('', 'ArtistsController@index');
	Route::get('{id}', 'ArtistsController@show');
	Route::post('', 'ArtistsController@store');
	Route::put('{id}', 'ArtistsController@update');
	Route::delete('{id}', 'ArtistsController@destroy');

});

/*
 * Grupo de rotas para o CRUD de Album
 */
Route::group(['prefix'=>'album'], function() {

	Route::get('', 'AlbumsController@index');

});

/*
 * Grupo de rotas para o CRUD de Music
 */
Route::group(['prefix'=>'music'], function() {

	Route::get('', 'MusicsController@index');

});
