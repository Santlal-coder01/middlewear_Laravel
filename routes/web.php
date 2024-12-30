<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;








// Middleware applied to all routes
Route::get('/', [UserController::class, 'login']);
Route::post('login/post', [UserController::class, 'loginPost'])->middleware('right')->name('login');
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register.show');
Route::post('/register', [UserController::class, 'register'])->name('register');
