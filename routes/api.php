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

// users api routes
Route::resource('users', 'UserController');

// trips api routes
Route::get('trips/search', 'TripController@search');
Route::get('trips/{slug}', 'TripController@show');
Route::resource('trips', 'TripController');

// reservations api routes
Route::resource('reservations', 'BookingController');