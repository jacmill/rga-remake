<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show() {
        return view("auth.login");
    }
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            "email" => ["required"],
            "password" => ["required"]
        ]);
        if(Auth::attempt($credentials, $request->get("remember_me"))) {
            $request->session()->regenerate();
            return redirect()->intended("/dashboard");
        }
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/");
    }
}
