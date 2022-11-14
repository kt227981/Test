<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\OuizController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('notification',[HomeController::class,'notification'])->name('notification');

Route::get('ouiz/create',[OuizController::class,'create'])->name('ouiz/create');

Route::get('student/create',[\App\Http\Controllers\admin\StudentController::class,'create'])->name('student/create');
Route::post('student/store',[\App\Http\Controllers\admin\StudentController::class,'store'])->name('student/store');
Route::get('student/show',[\App\Http\Controllers\admin\StudentController::class,'show'])->name('student/show');
Route::get('student/edit/{id}',[\App\Http\Controllers\admin\StudentController::class,'edit'])->name('student/edit');
Route::post('student/update/{id}',[\App\Http\Controllers\admin\StudentController::class,'update'])->name('student/update');
Route::get('student/destroy/{id}',[\App\Http\Controllers\admin\StudentController::class,'destroy'])->name('student/destroy');
Route::get('student_status',[\App\Http\Controllers\admin\StudentController::class,'status'])->name('student/status');


//Route::get('semesters.show',[\App\Http\Controllers\admin\SemesterController::class,'show'])->name('semesters.show');
//Route::get('semesters.create',[\App\Http\Controllers\admin\SemesterController::class,'create'])->name('semesters.create');
//Route::post('semesters.store',[\App\Http\Controllers\admin\SemesterController::class,'store'])->name('semesters.store');
//Route::get('semesters.edit/{id}',[\App\Http\Controllers\admin\SemesterController::class,'edit'])->name('semesters.edit');
//Route::post('semesters.update.{id}',[\App\Http\Controllers\admin\SemesterController::class,'update'])->name('semesters.update');
//Route::get('semesters.destroy.{id}',[\App\Http\Controllers\admin\SemesterController::class,'destroy'])->name('semesters.destroy');
//Route::get('semesters.status',[\App\Http\Controllers\admin\SemesterController::class,'status'])->name('semesters.status');


Route::get('join',[\App\Http\Controllers\HomeController::class,'join'])->name('join');
// quiz
Route::get('quiz/create',[\App\Http\Controllers\HomeController::class,'quiz'])->name('quiz/create');
Route::view('test','test');


Route::get('google_map', [HomeController::class, 'map']);

