<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;

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

// Route::view("/","insertRead");

Route::post('insertData',[mycontroller::class , 'insert']);

route::get('/',[mycontroller::class,'readdata']);

// route::view('update','updateview');
route::get('updatedelete',[mycontroller::class,'updateordelete']);

route::get('updatedata',[mycontroller::class,'update']);
route::get('moredata',[mycontroller::class,'more'])->middleware('auth')->name('moredata.more');
// route::get('moredata',[mycontroller::class,'more'])->middleware('auth')->name(moredata);

?> 