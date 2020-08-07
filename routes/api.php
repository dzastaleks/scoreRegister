<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getSeasons', 'APIController@getSeasons');
Route::get('getClubs', 'APIController@getClubs');
Route::get('getPosibleClubs', 'APIController@getPosibleClubs');

Route::get('getLatestScores', 'APIController@getLatestScores');
Route::get('getRankings', 'APIController@getRankings');