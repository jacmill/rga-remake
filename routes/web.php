<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPassword;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function() {
    return Inertia::render('Home');
});
Route::controller(RegisterController::class)->group(function() {
    Route::get('/register', 'show');
});
Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'show');
});