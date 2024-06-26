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
    return view('home');
});

Route::resource('season','SeasonController');
Route::resource('score','ScoreController');

Route::get('/score', 'ScoreController@index')->name('score');
Route::post('/submit','ScoreController@store');

Route::get('/rankings','ClubController@totals');