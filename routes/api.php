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
Route::get('shore-replicates', 'ShoreReplicateController@index');

// List all shore subreplicates
Route::get('shore-subreplicates', 'ShoreSubreplicateController@index');

// List all field work units
Route::get('field-work-units', 'FieldWorkUnitController@index');

// Show single field work unit
Route::get('field-work-unit/{id}', 'FieldWorkUnitController@show');

// Show single field work unit
Route::post('field-work-unit', 'FieldWorkUnitController@store');

// Show single field work unit
Route::put('field-work-unit', 'FieldWorkUnitController@store');

// Delete single shore subreplicates
Route::delete('field-work-unit/{id}', 'FieldWorkUnitController@destroy');