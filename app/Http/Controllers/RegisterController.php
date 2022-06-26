<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use App\Models\Captain;
use App\Models\Team;

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
            "teamname" => ["required", "max:255"],
            "game" => ["required", "in:LOL,CS"],
        ]);
        $captain = Captain::create([
            "name" => $request["name"],
            "last_name" => $request["lastname"], 
            "email" => $request["email"], 
            "password" => Hash::make($request["password"])
        ]);
        $team = Team::create([
            "name" => $request["teamname"],
            "about" => $request["about"],
            "game" => $request["game"]
        ]);
        return redirect("/login");
    }
}
