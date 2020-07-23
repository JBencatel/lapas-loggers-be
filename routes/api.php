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

Route::get('countries', 'CountryController@index');

Route::get('shores', 'ShoreController@index');
Route::get('shores/{id}', 'ShoreController@show');
Route::post('shores', 'ShoreController@store');
Route::put('shores', 'ShoreController@store');
Route::delete('shores/{id}', 'ShoreController@destroy');

Route::get('shore-exposures', 'ShoreExposureController@index');

Route::get('shore-levels', 'ShoreLevelController@index');

Route::get('field-work-units', 'FieldWorkUnitController@index');
Route::get('field-work-units/{id}', 'FieldWorkUnitController@show');
Route::post('field-work-units', 'FieldWorkUnitController@store');
Route::put('field-work-units', 'FieldWorkUnitController@store');
Route::delete('field-work-units/{id}', 'FieldWorkUnitController@destroy');


Route::get('logger-types', 'LoggerTypeController@index');
Route::get('logger-types/{id}', 'LoggerTypeController@show');
Route::post('logger-types', 'LoggerTypeController@store');
Route::put('logger-types', 'LoggerTypeController@store');
Route::delete('logger-types/{id}', 'LoggerTypeController@destroy');

Route::get('people', 'PersonController@index');
Route::get('people/{id}', 'PersonController@show');
Route::post('people', 'PersonController@store');
Route::put('people', 'PersonController@store');
Route::delete('people/{id}', 'PersonController@destroy');

Route::get('servicings', 'ServicingController@index');
Route::get('servicings/{id}', 'ServicingController@show');
Route::post('servicings', 'ServicingController@store');
Route::put('servicings', 'ServicingController@store');
Route::delete('servicings/{id}', 'ServicingController@destroy');

Route::get('microhabitats', 'MicrohabitatController@index');

Route::get('positions', 'PositionController@index');
Route::get('positions/{id}', 'PositionController@show');
Route::post('positions', 'PositionController@store');
Route::put('positions', 'PositionController@store');
Route::delete('positions/{id}', 'PositionController@destroy');

Route::get('loggers', 'SerialController@index');
Route::get('loggers/{id}', 'SerialController@show');
Route::post('loggers', 'SerialController@store');
Route::put('loggers', 'SerialController@store');
Route::delete('loggers/{id}', 'SerialController@destroy');