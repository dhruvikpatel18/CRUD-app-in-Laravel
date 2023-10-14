<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\AuthController;

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
    return view('welcome');
});

// Route::controller(AuthController::class)->group(function(){
//     Route::get('register','register')->name('register');
// });

// Route::view("/","insertRead");

Route::post('insertData',[mycontroller::class , 'insert']);

route::get('/',[mycontroller::class,'readdata']);

// route::view('update','updateview');
route::get('updatedelete',[mycontroller::class,'updateordelete']);

route::get('updatedata',[mycontroller::class,'update']);

// route::get('moredata',[mycontroller::class,'more'])->middleware('auth')->name(moredata);

Route::group(['middleware'=>"web"],function(){
    route::get('moredata',[mycontroller::class,'more']);
});

Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:2,1');

    Route::get('register',[AuthController::class,'register_view'])->name('register');
    Route::post('register',[AuthController::class,'register'])->name('register')->middleware('throttle:2,1');
});

Route::group(['middleware'=>'auth'],function(){
    // Route::get('home',[AuthController::class,'home'])->name('home');
    route::get('home',[mycontroller::class,'readdata']);
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
});

?> 