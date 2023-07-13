<?php

namespace App\Http\Controllers;

use App\Models\
{
    Result,
    Vacancie,
    Candidate
};
use Illuminate\Http\Request;

class AverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidate = Candidate::all();
        $vacancie = Vacancie::all();
        $result = Result::all();
        return view('aver/index', compact('candidate', 'vacancie', 'result'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
