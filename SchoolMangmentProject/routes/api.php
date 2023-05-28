<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::middleware('adminAccess')->group(function(){
    Route::post('/createClass',[ClassController::class,'createClass']);
    Route::post('/createSection',[SectionController::class,'createSection']);
    Route::post('/createSubject',[SubjectController::class,'createSubject']);
    
});



