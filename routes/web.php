<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use  App\Http\Middleware\auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware([auth::class])->group(function () {

    Route::post('/login', 'App\Http\Controllers\AuthController@login');
    Route::post('/register', 'App\Http\Controllers\AuthController@register');
    Route::post('/logout', 'AuthController@logout');
    Route::get('/user', 'AuthController@user');
    Route::post('/refresh', 'AuthController@refresh');

    Route::get("/Registre", function () {
        return view('admin.register');
    });
    Route::get("/login", function () {
        return view('admin.login');
    });
});
