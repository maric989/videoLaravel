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

Route::get('/', 'MovieController@welcome');
//Route::get('/','welcome');

//actors

Route::post('/actor', 'ActorController@store');

Route::get('/actor/create','ActorController@create');

Route::get('/actor/show/{id}','ActorController@show');

Route::get('/actor/show','ActorController@index');

Route::post('/actor/delete/{id}','ActorController@delete');

Route::get('/actor/{id}/edit','ActorController@edit');

Route::put('/actor/{id}','ActorController@update');

//category

Route::post('/category', 'CategoryController@store');

Route::get('/category/create', 'CategoryController@create');

Route::get('/category/show/{id}', 'CategoryController@show');

Route::get('/category/show', 'CategoryController@index');

Route::post('/category/delete/{id}', 'CategoryController@delete');

Route::post('/category/{id}/edit', 'CategoryController@edit');

Route::put('/category/{id}', 'CategoryController@update');

//movies

Route::get('/movie/create', 'MovieController@create');

Route::post('/movie', 'MovieController@store');

Route::get('/movie/index','MovieController@index');

Route::get('/movie/show/{id}', 'MovieController@show');

Route::post('/movie/delete/{id}','MovieController@delete');

Route::post('/movie/{id}/edit','MovieController@edit');

Route::put('/movie/{id}','MovieController@update');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
