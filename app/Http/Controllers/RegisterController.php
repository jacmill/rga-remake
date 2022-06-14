<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function show() {
        return view("forms.register");
    }
    public function create( Request $request) {
        $request->validate([
            "name" => ["required"],
            "lastname" => ["required"],
            "email" => ["required"],
            "password" => ["required", Password::min(8)
                                                ->letters()
                                                ->mixedCase()
                                                ->numbers()
                                                ->symbols()],
            "age" => ["required", "numeric"],
            "school" => ["required"],
            "teamname" => ["required"]
        ]);
    }
}
