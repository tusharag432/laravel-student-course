<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\CoursesController;
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

Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::apiResource('/students',StudentsController::class);
});

Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::apiResource('/courses',CoursesController::class);
});