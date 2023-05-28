<?php

use App\Http\Controllers\createClassController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

<<<<<<< HEAD
Route::post('/registerStudent' , [RegisterController::class,'registerStudent']);
=======


Route::middleware('adminAccess')->group(function(){
});

Route::post('/createClass',[createClassController::class,'createClass']);
>>>>>>> e795856a23a27a9ca2c42fdc693cd64193f4f619
