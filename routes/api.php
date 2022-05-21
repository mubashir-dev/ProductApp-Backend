<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
 Route::prefix('v1')->group(function(){
     //Brands
     Route::get('/brands',[BrandController::class,'index']);
     Route::get('/categories',[CategoriesController::class,'index']);
     Route::get('/categories/{id}',[CategoriesController::class,'show']);
 });

