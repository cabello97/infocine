<?php

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}
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

Route::get('/', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin');
Route::get('info/{id}', 'FrontController@info');

Auth::routes();

Route::resource('usuario', 'UsuarioController');

Route::resource('log', 'LogController');
Route::get('logout', 'LogController@logout');

Route::resource('genero', 'GeneroController');
Route::get('generos', 'GeneroController@listing');


Route::post('likes', [
  'uses' => 'MovieController@likes',
  'as' => 'pelicula.likes'
]);
Route::post('dislikes', [
  'uses' => 'MovieController@dislikes',
  'as' => 'pelicula.dislikes'
]);
Route::resource('pelicula', 'MovieController');

Route::resource('comentario', 'CommentController');

Route::get('/home', 'HomeController@index')->name('home');
