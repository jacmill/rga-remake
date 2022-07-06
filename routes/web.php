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
Route::controller(RegisterController::class)->middleware(["guest"])->group(function() {
    Route::get('/register', 'show')->name('register.show');
    Route::post('/register', 'store')->name('register.store');
});
Route::middleware(["guest"])->group(function() {
    Route::get('/login', [LoginController::class, "show"])->name('login.show');
    Route::post('/login', [LoginController::class, "authenticate"])->name('login.login');
});
Route::post('/logout', [LoginController::class, "logout"]);
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function() {
        return Inertia::render('Dashboard/Dashboard');
    });
});