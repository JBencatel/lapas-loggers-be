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

// List all countries
Route::get('countries', 'CountryController@index');

// Show single country
Route::get('countries/{id}', 'CountryController@show');

// List all shore replicates
Route::get('shore-replicates', 'ShoreReplicateController@index');

// Show single shore replicate
Route::get('shore-replicates/{id}', 'ShoreReplicateController@show');

// List all shore subreplicates
Route::get('shore-subreplicates', 'ShoreSubreplicateController@index');

// Show single shore subreplicates
Route::get('shore-subreplicates/{id}', 'ShoreSubreplicateController@show');