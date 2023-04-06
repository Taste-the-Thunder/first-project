<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BasicController::class,'index']);
Route::get('/about/{name}', [BasicController::class, 'about']);
Route::get('/userinfo', [BasicController::class, 'userInfo']);

Route::get('/student', [BasicController::class, 'student']);
Route::post('/student', [BasicController::class, 'studentStore']);
Route::delete('/student/{id}', [BasicController::class, 'studentDelete']);
