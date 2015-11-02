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
 * Validacao da variavel id da rota permitindo apenas numeros inteiros
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
	Route::post('', 'ArtistsController@store');
	Route::get('{id}', 'ArtistsController@show');
	Route::put('{id}', 'ArtistsController@update');
	Route::delete('{id}', 'ArtistsController@destroy');

});

/*
 * Grupo de rotas para o CRUD de Album
 */
Route::group(['prefix'=>'album'], function() {

	Route::get('', 'AlbumsController@index');
	Route::post('', 'AlbumsController@store');
	Route::get('{id}', 'AlbumsController@show');
	Route::put('{id}', 'AlbumsController@update');
	Route::delete('{id}', 'AlbumsController@destroy');

});

/*
 * Grupo de rotas para o CRUD de Music
 */
Route::group(['prefix'=>'music'], function() {

	Route::get('', 'MusicsController@index');

});
