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

//TEST
Route::get('test', function () {
    return 'Hello Glover!';
});

Route::group(["prefix" => "v1"], function () {

    // authentication
    Route::group(['prefix' => 'auth', 'namespace' => 'v1\Auth'], function () {

        Route::post('login', 'LoginController@login');
        Route::get('logout', 'LoginController@logout')->middleware("auth:api");
    });

    //Authenticated Routes
    Route::group(['middleware' => ['auth:api']], function () {

        //Requests
        Route::group(['prefix' => 'request', 'namespace' => 'v1\RequestType'], function () {
            Route::get('fetch/all',                 [RequestTypeController::class, 'dispalyAllPendingRequests']);
            Route::put('approve',                   [RequestTypeController::class, 'approveRequest']);
            Route::put('decline',                   [RequestTypeController::class, 'declineRequest']);
        });

        //UserDetails
        Route::group(['prefix' => 'user_detail', 'namespace' => 'v1\UserDetail'], function () {
            Route::post('create',                   [UserDetailController::class, 'createUserDetails']);
            Route::put('update',                    [UserDetailController::class, 'updateUserDetails']);
            Route::delete('delete',                 [UserDetailController::class, 'destroyUserDetails']);
        });
    });
});
