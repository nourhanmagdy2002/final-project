<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\ProductsAdminController;

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

Route::get('/home', function () {
    return view('home');
});
Route::group(['prefix'=>'/auth'],function(){
    Route::get('/register',[UserController::class,'create']);
    Route::post('/register.save',[UserController::class,'store'])->name('register.save');
    Route::get('/login',[LoginController::class,'create'])->name('login');
    Route::post('/login.save',[LoginController::class,'store'])->name('login.save');

});
Route::get('/logout',[LogoutController::class,'logout'])->middleware('auth');
Route::get('/contact',[ContactController::class,'create'])->middleware('auth');
Route::post('/contact.save',[ContactController::class,'store'])->name('contact.save');
Route::get('/about' , function(){
    return view('about');
});

Route::group(['prefix'=>'/admin'],function(){
    Route::get('/users',[UserAdminController::class,'store'])->middleware('CheckType');
    Route::get('/products',[ProductsAdminController::class,'store'])->middleware('CheckType');
    Route::get('/contact',[AdminContactController::class,'store'])->middleware('CheckType');



});
Route::get('/products',[ProductsController::class,'save']);
Route::get('/delete',[DeleteController::class,'delete']);



