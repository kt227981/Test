<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\RegisterController;
use App\Http\Controllers\api\ApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register',[RegisterController::class,'register'])->name('register');
Route::post('login',[RegisterController::class,'login'])->name('login');
Route::get('details',[RegisterController::class,'details'])->name('details');
Route::post('logout',[RegisterController::class,'logout'])->name('logout');
Route::get('user/get',[RegisterController::class,'user_get'])->name('user/get');

Route::post('api/store',[ApiController::class,'store'])->name('api/store');
Route::get('api/show',[ApiController::class,'show'])->name('api/show');
Route::get('api/edit/{id}',[ApiController::class,'edit'])->name('api/edit');
Route::post('api/update/{id}',[ApiController::class,'update'])->name('api/update');
Route::get('api/destroy/{id}',[ApiController::class,'destroy'])->name('api/destroy');



