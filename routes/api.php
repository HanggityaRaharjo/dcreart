<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\api\PostApiController;
use App\Http\Controllers\auth\api\FeatureApiController;
use App\Http\Controllers\auth\api\ProjectApiController;
use App\Http\Controllers\auth\api\TestimonialApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('store-like/{id}',[ProjectApiController::class,'store_like']);
Route::get('projects',[ProjectApiController::class,'get_all_projects']);
Route::get('projects/{id}',[ProjectApiController::class,'show']);

// Posts
Route::prefix('posts')->group(function () {
    Route::get('/',[PostApiController::class,'get_all_posts']);
    Route::get('/{id}',[PostApiController::class,'get_post_by_id']);
    Route::post('/delete/{id}',[PostApiController::class,'delete_posts']);
});

// Features
Route::prefix('features')->group(function () {
    Route::get('/',[FeatureApiController::class,'get_all_features']);
    Route::post('/delete/{id}',[FeatureApiController::class,'delete_features']);
    Route::get('/{id}',[FeatureApiController::class,'get_feature_by_id']);
});

// Get All Testimonials
Route::prefix('testimonials')->group(function () {
    Route::get('/',[TestimonialApiController::class,'get_all_testimonials']);
    Route::post('/delete/{id}',[TestimonialApiController::class,'delete_testimonials']);
});

