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

Route::get('/', 'PageController@home')->name('home');
Route::get('/list', 'PageController@list')->name('list');
Route::get('/read', 'PageController@read')->name('read');


// Route::get('/houses', 'HousesController@index')->name('houses.index');
// Route::post('/houses', 'HousesController@store')->name('houses.store');


Route::resource('/comics', 'ComicsController');