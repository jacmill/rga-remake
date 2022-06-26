<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('login', [LoginController::class, "show"]);
Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'show');
    Route::post('register', 'create');
});