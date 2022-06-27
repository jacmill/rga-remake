<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'show');
    Route::post('login', 'authenticate');
});
Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'show');
    Route::post('register', 'create');
});