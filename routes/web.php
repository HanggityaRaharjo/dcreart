<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\auth\AdminController;
use App\Http\Controllers\auth\FeatureController;
use App\Http\Controllers\auth\VirtualController;
use App\Http\Controllers\auth\TestimonialController;

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

// Home / First Landing 
Route::get('/',[HomeController::class,'index']);

// Project
Route::prefix('project')->group(function () {
    Route::get('/interior',[ProjectController::class,'interior']);
    Route::get('/exterior',[ProjectController::class,'exterior']);
    Route::get('/show/{slug}',[ProjectController::class,'show']);
});

// About
Route::get('/about',[AboutController::class,'index']);

// Contact
Route::get('/contact',[ContactController::class,'index']);

// Posts
Route::get('/posts',[PostController::class,'index']);

// Login
Route::get('/login',[AuthController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[AuthController::class,'authenticate'])->middleware('guest');

// Register
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store'])->middleware('guest');

// Auth User
Route::group(['middleware' => 'auth'], function () {
    // Dashboard 
    Route::get('/dashboard',[DashboardController::class,'index'])->name('home');
    // Logout
    Route::post('/logout',[AuthController::class,'logout']);
    // Project
    Route::prefix('projects')->group(function () {
        Route::get('/',[ProjectController::class,'index']);
        Route::post('/',[ProjectController::class,'store']);
        Route::get('/create',[ProjectController::class,'create']);
    });
    // Features
    Route::prefix('features')->group(function () {
        Route::get('/',[FeatureController::class,'index']);
        Route::post('/',[FeatureController::class,'store']);
    });

    // Virtual 360
    Route::get('/virtual',[VirtualController::class,'index']);
    
    // posts
    Route::get('/admin/post',[AdminController::class,'post']);
    Route::post('/admin/post',[PostController::class,'store']);
    
    // Testmonial
    Route::get('/admin/testimonial',[AdminController::class,'testimonial']);
    Route::post('/admin/testimonial',[TestimonialController::class,'store']);

});