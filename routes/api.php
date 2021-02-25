<?php

use Illuminate\Http\Request;

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

// route to get all people living in given city
Route::get('/peoples/{city}','WpyApiController@findAllPeoples');
// route to get all cars in given street name
Route::get('/cars/{street}','WpyApiController@findAllCarsOnStreet');
// route to get owner of car by licence plate
Route::get('/carOwner/{plate}','WpyApiController@findCarOwnerByPlate');
// route to get address by person 
Route::get('/address/{person}','WpyApiController@findFullAddressByPerson');