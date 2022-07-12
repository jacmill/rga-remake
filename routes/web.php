<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ResetPasswordController;
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

Route::group([
    "controller" => ResetPasswordController::class,
    "middleware" => ["guest"]
], function() {
    Route::get('/forgot_password', 'show_forgot_password')->name("password.request");
    Route::post('/forgot_password', 'forgot_password')->name("password.email");
    Route::get('/reset_password/{token}', 'show_reset_password')->name("password.reset");
    Route::post('/reset_password/', 'reset_password')->name("password.update");
});
Route::group([
    "prefix" => "dashboard",
    "middleware" => "auth"
], function() {
    Route::get('/', function() {
        return Inertia::render('Dashboard/Dashboard');
    })->name('dashboard');
    Route::get('/teammates', function() {
        return Inertia::render('Dashboard/Teammates');
    });
});
