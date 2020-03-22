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
    return view('welcome');
});

// TOKEN RETURN
Route::get('/api/token', 'ColorController@tokenReturn');

// GET COLOR (Get all colors)
Route::get('/api/color', 'ColorController@index');

// POST COLOR (Add new color)
Route::post('/api/color', 'ColorController@store');

// GET COLOR ID (Get one color by id)
Route::get('/api/color/{id}', 'ColorController@show');

// PUT COLOR ID (Update one color by id)
Route::put('/api/color/{id}', 'ColorController@update');

// PUT COLOR ID (Delete one color by id)
Route::delete('/api/color/{id}', 'ColorController@destroy');