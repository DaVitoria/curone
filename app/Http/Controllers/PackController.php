<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\Result;
use App\Models\Vacancie;
use Illuminate\Http\Request;

class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = Vacancie::all();
        $result = Result::all();
        return view('pack/index', compact('vacancies', 'result'));
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
    public function show(Pack $pack)
    {
        $vacancies = Vacancie::all();
        return view('pack/show', compact('vacancies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pack $pack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pack $pack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pack $pack)
    {
        //
    }
}
