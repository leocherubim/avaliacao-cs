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

Route::get('/', function () {
    return view('welcome');
});

/*
 * Grupo de rotas para o CRUD de Artist
 */
Route::group(['prefix'=>'artist'], function() {

	Route::get('', 'ArtistsController@index');

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
