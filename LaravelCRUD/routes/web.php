<?php

use Illuminate\Support\Facades\Route;

//Lấy controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'getAllUser']);
Route::get('/home', [HomeController::class, 'getAllUser'])->name('home');

Route::resource('UserController', UserController::class);

Route::get('/edit/{user}', [UserController::class, 'edit']);
Route::get('/create', [UserController::class, 'create']);

Route::post('/store', [UserController::class, 'store']);

Route::delete('/delete/{ma_User}', [UserController::class, 'destroy']); //Chức năng Xóa