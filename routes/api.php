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

Route::group(['middleware' => 'auth:api'], function() {

//list clothes
Route::get('showclothes','ClothesController@index');
// list single clothes 
Route::get('showclothes/{id}','ClothesController@show');
//create new clothes
Route::post('showclothes','ClothesController@store');
//update article
Route::put('showclothes','ClothesController@store');
//delete 
Route::delete('showclothes/{id}','ClothesController@destroy');
});