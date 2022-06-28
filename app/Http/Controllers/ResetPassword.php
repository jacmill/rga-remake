<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;


class ResetPassword extends Controller
{
    public function show_forgot_password() {
        return view("auth.forgot-password");
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
}
