<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('login', [LoginController::class, "show"]);
Route::get('register', [RegisterController::class, "show"]);