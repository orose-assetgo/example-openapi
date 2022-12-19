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

Route::get('/', function () {
    return view('welcome');
});

// Combined controller
//Route::get('/thing/{id}', "\App\Http\Controllers\CombinedController@get");
//Route::patch('/thing/{id}', "\App\Http\Controllers\CombinedController@patch");
//Route::delete('/thing/{id}', "\App\Http\Controllers\CombinedController@delete");
//Route::post('/thing', "\App\Http\Controllers\CombinedController@post");

// Separate controllers
Route::get('/thing/{id}', \App\Http\Controllers\GetController::class);
Route::patch('/thing/{id}', \App\Http\Controllers\PatchController::class);
Route::delete('/thing/{id}', \App\Http\Controllers\DeleteController::class);
Route::post('/thing', \App\Http\Controllers\PostController::class);
