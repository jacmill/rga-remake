<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPassword;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'show');
    Route::post('login', 'authenticate');
    Route::get('logout', 'logout');
});
Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'show');
    Route::post('register', 'create');
});
Route::get('dashboard', function() {
    $user = Auth::user();
    $username = $user->name . " " . $user->last_name;
    $team = DB::table('teams')->where('id', $user->team_id)->first()->name;
    return view('dashboard.dashboard', ["username" => $username, "team" => $team]);
})->middleware("auth");
Route::controller(ResetPassword::class)->middleware(['guest'])->group(function() {
    Route::get('/forgot-password', 'show_forgot_password')->name('password.request');
    Route::post('/forgot-password', 'forgot_password')->name('password.email');
    
    Route::get('/reset-password/{token}', 'show_reset_password')->name('password.reset');
    Route::post('/reset-password', 'reset_password')->name('password.update');
});
