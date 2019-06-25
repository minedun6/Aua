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

Route::group(['middleware' => 'guest'], function () {
    Route::group(['namespace' => 'Frontend'], function () {
        Route::group(['namespace' => 'FrontFeatures'], function () {
            Route::post('/registeraction', 'RegistrationController@registeraction')->name('registeraction');
        });
    });
});



Route::group(['namespace' => 'Frontend'], function () {
    Route::group(['namespace' => 'FrontFeatures'], function () {

        //Route::group(['middleware' => 'access.routeNeedsRole:Architect'], function () {
        Route::get('userData', 'ArchitectProfileController@getUserData')->name('getUserData');
        // });
    });
});