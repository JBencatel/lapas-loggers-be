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



// List all shore replicates
Route::get('shore-levels', 'ShoreLevelController@index');

// List all shore replicates
Route::get('shore-replicates', 'ShoreReplicateController@index');

// List all shore subreplicates
Route::get('shore-subreplicates', 'ShoreSubreplicateController@index');



// List all field work units
Route::get('field-work-units', 'FieldWorkUnitController@index');

// Show single field work unit
Route::get('field-work-unit/{id}', 'FieldWorkUnitController@show');

// Create field work unit
Route::post('field-work-unit', 'FieldWorkUnitController@store');

// Update field work unit
Route::put('field-work-unit', 'FieldWorkUnitController@store');

// Delete field work unit
Route::delete('field-work-unit/{id}', 'FieldWorkUnitController@destroy');



// List all logger types
Route::get('logger-types', 'LoggerTypeController@index');

// Show single logger type
Route::get('logger-type/{id}', 'LoggerTypeController@show');

// Create logger type
Route::post('logger-type', 'LoggerTypeController@store');

// Update logger type
Route::put('logger-type', 'LoggerTypeController@store');

// Delete logger type
Route::delete('logger-type/{id}', 'LoggerTypeController@destroy');