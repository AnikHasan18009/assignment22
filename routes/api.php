<?php

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


Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/register', 'register');
    Route::post('/logout', 'logout');
    Route::post('/refresh', 'refresh');

});

Route::controller(TodoController::class)->group(function () {
    Route::get('user/todos', 'index');
    Route::post('user/todo', 'store');
    Route::get('user/todo/{id}', 'show');
    Route::put('user/todo/{id}', 'update');
    Route::delete('user/todo/{id}', 'destroy');
});