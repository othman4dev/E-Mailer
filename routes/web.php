<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SendEmail;

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
Route::get('/', function () {
    return view('admin.category');
});

Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/register', 'AuthController@register');
Route::post('/logout', 'AuthController@logout');
Route::get('/user', 'AuthController@user');
Route::post('/refresh', 'AuthController@refresh');