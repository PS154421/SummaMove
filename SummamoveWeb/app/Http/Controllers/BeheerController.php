<?php

namespace App\Http\Controllers;

use App\Models\Oefening;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BeheerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oefeningen = Oefening::All();

        return view("oefeningen.index", ['oefeningen' => $oefeningen]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Oefening $odel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oefening $odel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oefening $odel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oefening $odel)
    {
        //
    }
}
