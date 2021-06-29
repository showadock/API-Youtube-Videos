<?php

use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

//  GET /api/youtube?search=muse
//  Response:
//  STATUS 200

Route::get('api/youtube', [App\Http\Controllers\YoutubeController::class,'show']);
    