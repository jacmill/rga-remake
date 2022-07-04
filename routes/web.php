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
})->name('home');
Route::controller(RegisterController::class)->group(function() {
    Route::get('/register', 'show')->name('register.show');
    Route::post('/register', 'store')->name('register.store');
});
Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'show')->name('login.show');
    Route::post('/login', 'authenticate')->name('login.login');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function() {
        return Inertia::render('Dashboard/Dashboard');
    });
});