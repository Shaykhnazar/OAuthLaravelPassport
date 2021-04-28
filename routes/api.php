<?php

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

//For Auth
Route::group([
    'namespace' => 'Api'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');

    Route::group([
        'middleware' => ['auth:api']
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('profile', 'AuthController@profile');
    });
});
