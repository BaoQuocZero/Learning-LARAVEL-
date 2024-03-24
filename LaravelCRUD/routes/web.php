<?php

use Illuminate\Support\Facades\Route;

//Lấy controller
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'getAllUser']);