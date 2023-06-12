<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('admin', [AdminController::class,'index'])->name('admin');
Route::post('admin/status/{id}', [ProfileController::class,'status'])->name('status');
Route::get('user/profile/{name}', [ProfileController::class,'profile'])->name('profile');

Route::resource('admin/users',UserController::class);
Route::resource('admin/courses',CoursesController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
