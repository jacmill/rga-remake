<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ResetPassword extends Controller
{
    public function show_forgot_password() {
        return view("auth.forgot-password");
    }
    public function show_reset_password($token) {
        return view('auth.reset-password', ["token" => $token]);
    }
    public function forgot_password(Request $request) {
        $request->validate([
            "email" => ["required", "email"],
        ]);
        $status = Password::sendResetLink(
            $request->only("email")
        );
        
        return $status === Password::RESET_LINK_SENT
                        ? back()->with(["status" => __($status)])
                        : back()->withErrors(["email" => __($status)]);
    }
    public function reset_password(Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ]);
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
     
        return $status === Password::PASSWORD_RESET
                    ? redirect('/login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
