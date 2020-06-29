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

// List countries
Route::get('countries', 'CountryController@index');

// Show single country
Route::get('countries/{id}', 'CountryController@show');

// List countries
Route::get('shore-replicates', 'ShoreReplicateController@index');

// Show single country
Route::get('shore-replicates/{id}', 'ShoreReplicateController@show');