<?php

namespace App\Http\Controllers;

use App\Models\Teammate;
use Illuminate\Http\Request;
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
        return Inertia::render('Dashboard/Teammates');
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
