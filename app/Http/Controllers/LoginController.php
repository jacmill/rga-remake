<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class LoginController extends Controller
{
    public function show() {
        return Inertia::render('Auth/Login');
    }
    public function authenticate(Request $request) {
        $request->validate([
            "email" => ["required"],
            "password" => ["required"],
            "remember_me" => ["required"]
        ]);
        if(Auth::attempt($request->only(["email", "password"]), $request["remember_me"])) {
            $request->session()->regenerate();
            return Redirect::route('home');
        }
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::route('home');
    }
}
