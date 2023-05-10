<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('/posts', [userController::class, 'index']);
Route::post('/posts', [userController::class, 'store']);
Route::get('/posts/{id}', [userController::class, 'show']);
Route::put('/posts/{id}', [userController::class, 'update']);
Route::delete('/posts/{id}', [userController::class, 'destroy']);
