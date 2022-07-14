<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\TeammateController;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function() {
    return Inertia::render('Home');
})->name('home');

Route::group([
    "controller" => RegisterController::class,
    "middleware" => ["guest"]
], function() {
    Route::get('/register', 'show')->name('register.show');
    Route::post('/register', 'store')->name('register.store');
});

Route::group([
    "controller" => LoginController::class,
    "middleware" => ["guest"]
], function() {
    Route::get('/login', "show")->name('login.show');
    Route::post('/login', "authenticate")->name('login.login');
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
    Route::resource('/teammates', TeammateController::class);
    Route::get('/team', function() {
        $logo = "default.png";
        $team_logo = Team::find(Auth::user()->team_id)->logo;
        if($team_logo !== null) {
            $logo = $team_logo;
        }
        return Inertia::render('Dashboard/Team', [
            'logo' => asset("team_logos/".$logo)
        ]);
    })->name('dashboard.team');
    Route::post('/team', function(Request $request) {
        $team = Team::find(Auth::user()->team_id);
        $logo_name = $team->game . "_logo_" . $team->name . ".png";
        $request->file('logo')->storeAs(
            'team_logos', $logo_name
        );
        $team->update(['logo' => $logo_name]);
    });
});
