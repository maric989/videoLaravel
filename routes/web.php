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

Route::get('/category/{id}/edit', 'CategoryController@edit');

Route::put('/category/{id}', 'CategoryController@update');




