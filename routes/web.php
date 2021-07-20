<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ApartmentController;
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

Route::get('/',[ItemController::class,'index']);
Route::get('/detail/{item:id}',[ItemController::class,'show']);
Route::get('/detail-house/{item:slug}',[ItemController::class,'showhouse']);
Route::get('/detail-apartment/{apartment:slug}',[ApartmentController::class,'showapart']);
Route::get('/detail-hotel/{hotel:slug}',[ItemController::class,'showhotel']);

