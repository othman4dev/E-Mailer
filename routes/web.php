<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SendEmail;
use App\Http\Controllers\NewsLetterController;

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
    return view('admin.index');
});

Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/register', 'AuthController@register');
Route::post('/logout', 'AuthController@logout');
Route::get('/user', 'AuthController@user');
Route::post('/refresh', 'AuthController@refresh');


// category routes

Route::get('/category',[CategoryController::class,'categoryviews']);
Route::get('/addcategory',[CategoryController::class,'addcategory']);
Route::post('/insert',[CategoryController::class,'insert']);
Route::get('/supcategory/{id}',[CategoryController::class,'delete']);
Route::get('/editcategory/{id}',[CategoryController::class,'editview']);
Route::get('/searchCategory/{value}',[CategoryController::class,'serachCategory']);
Route::post('/update/{id}',[CategoryController::class,'updatecategory']);


// mail
Route::get('/mail',[MailController::class,'mailviews']);
Route::get('/searchMail/{value}',[MailController::class,'searchMail']);

Route::get('/addmail',[MailController::class,'addmail']);
Route::post('/insertmail',[MailController::class,'insertmail']);


Route::get('/supmail/{id}',[MailController::class,'deleteMail']);

Route::get('/editemail/{id}',[MailController::class,'editview']);
Route::post('/updatemail/{id}',[MailController::class,'updatemail']);

// newsletter

Route::get('/newsletter',[NewsLetterController::class,'index']);
Route::get('/searchNewsletter/{value}',[NewsLetterController::class,'searchNewsletter']);
Route::get('/FilterNewsletter/{idCat}',[NewsLetterController::class,'FilterNewsletter']);

Route::get('/addnewslater',[NewsLetterController::class,'addnewsletter']);
Route::post('/insertnewsletter',[NewsLetterController::class,'insernewsletter']);


Route::get('/supnewsletter/{id}',[NewsLetterController::class,'deleteNewsletter']);


Route::get('/editnewletter/{id}',[NewsLetterController::class,'newsview']);
Route::post('/updateewletter/{id}',[NewsLetterController::class,'update']);


