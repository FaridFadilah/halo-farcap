<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
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

Route::get("/",fn() => view('auth.home'))->name("home")->middleware('withAuth');
// Route::get("/feature",[LandingController::class, "feature"])->name("feature");
// Route::get("/work",[LandingController::class, "work"])->name("work");
// Route::get("/pricing",[LandingController::class, "pricing"])->name("pricing");
// Route::get("/reviews",[LandingController::class, "reviews"])->name("reviews");


// Route::resource('user', UserController::class);

// Route::get("/user/aktif/{id}", [UserController::class, "aktif"])->name("user.aktif");

// Route::any('/upload', [UploadController::class, 'upload'])->name("upload");

// Route::resource("sekolah", SekolahController::class);

// Route::controller(AuthController::class)
// Route::any('/login', [AuthController::class, 'login'])->middleware(['noAuth'])->name('login');
// Route::any('/logout', [AuthController::class, 'logout'])->middleware(['withAuth'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');