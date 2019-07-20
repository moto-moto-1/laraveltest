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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    //Route::post('register', 'AuthController@register')->middleware('throttle:12,10');
    //Route::get('register', 'AuthController@register')->middleware('throttle:12,10');

    Route::post('register', 'AuthController@register')->middleware('throttle:12,10');
    //Route::get('register', 'Auth\RegisterController@showRegistrationForm');


    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('me', 'AuthController@me');

    Route::get('personal', 'PersonalController@showall');

    Route::get('csrf', function() {
echo csrf_field(); 

    });

});