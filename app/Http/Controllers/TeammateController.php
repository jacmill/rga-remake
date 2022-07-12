<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Teammate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class TeammateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teammates = Team::find(Auth::user()->team_id)->teammates;
        return Inertia::render('Dashboard/Teammates', [
            "teammates" => $teammates->map(function($teammate){
                return [
                    "name" => $teammate->name,
                    "last_name" => $teammate->last_name,
                    "age" => $teammate->age,
                    "school" => $teammate->school,
                    "is_coach" => $teammate->is_coach,
                    "is_substitute" => $teammate->is_substitute             
                ];
            })
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teammate  $teammate
     * @return \Illuminate\Http\Response
     */
    public function show(Teammate $teammate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teammate  $teammate
     * @return \Illuminate\Http\Response
     */
    public function edit(Teammate $teammate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teammate  $teammate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teammate $teammate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teammate  $teammate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teammate $teammate)
    {
        //
    }
}
