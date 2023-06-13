<?php

namespace App\Http\Controllers;

use App\Models\Oefening;
use Illuminate\Http\Request;

class OefeningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = [
            'success' => true,
            'data'    => Oefening::all()
        ];
        return response()->json($response, 200);
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
    public function show(Oefening $oefening)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oefening $oefening)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oefening $oefening)
    {
        //
    }
}
