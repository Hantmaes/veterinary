<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout/layout');
});


//Owner routes

Route::get('/owners', 'OwnerController@index')->name('owners.index');

Route::get('/owners/search', 'OwnerController@search')->name('owners.search');

Route::get('/owners/{owner_id}', 'OwnerController@show')->where('owner_id', '[0-9]+');

Route::get('/owners/create',         'OwnerController@create')->name('owners.create');
Route::post('/owners',               'OwnerController@store')->name('owners.store');
Route::get('/owners/{owner_id}/edit', 'OwnerController@edit')->name('owners.edit');
Route::post('/owners/{owner_id}',     'OwnerController@update')->name('owners.update');

//Animal routes

Route::get('/animal', 'OwnerController@index')->name('animal.index');
Route::get('/animal', 'OwnerController@search')->name('animal.search');

Route::get('/animal/{owner_id}', 'OwnerController@show')->where('owner_id', '[0-9]+');

Route::get('/animal/create',         'OwnerController@create')->name('animal.create');
Route::post('/animal',               'OwnerController@store')->name('animal.store');
Route::get('/animal/{owner_id}/edit', 'OwnerController@edit')->name('animal.edit');
Route::post('/animal/{owner_id}',     'OwnerController@update')->name('animal.update');