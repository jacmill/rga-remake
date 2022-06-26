<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\Captain;

class RegisterController extends Controller
{
    public function show() {
        return view("auth.register");
    }
    public function create( Request $request) {
        $request->validate([
            "name" => ["required", "max:255"],
            "lastname" => ["required", "max:255"],
            "email" => ["required", "max:255"],
            "password" => ["required", Password::min(8)
                                                ->letters()
                                                ->mixedCase()
                                                ->numbers()
                                                ->symbols()],
            "age" => ["required", "numeric"],
            "school" => ["required"],
            "teamname" => ["required", "max:255"]
        ]);
    }
}
