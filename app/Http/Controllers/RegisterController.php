<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use App\Models\Captain;
use App\Models\Team;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class RegisterController extends Controller
{
    public function show() {
        return Inertia::render('Auth/Register');
    }
    public function store(Request $request) {
        $credentials = $request->validate([
            "name" => ["required", "max:255"],
            "last_name" => ["required", "max:255"],
            "email" => ["required", "max:255"],
            "password" => ["required", "confirmed", Password::min(8)
                                                ->letters()
                                                ->mixedCase()
                                                ->numbers()
                                                ->symbols()],
            "age" => ["required", "numeric"],
            "school" => ["required"],
            "teamname" => ["required", "max:255"],
            "game" => ["required", "in:LOL,CS"],
            "about" => ["max:700"]
        ]);

        $team = Team::create([
            "name" => $credentials["teamname"],
            "about" => $credentials["about"],
            "game" => $credentials["game"]
        ]);
        $captain = new Captain([
            "name" => $credentials["name"],
            "last_name" => $credentials["last_name"], 
            "email" => $credentials["email"],
            "age" => $credentials["age"],
            "school" => $credentials["school"],
            "password" => Hash::make($credentials["password"]),
        ]);
        $team->captain()->save($captain);
        return Redirect::route('login.show');
    }
}
