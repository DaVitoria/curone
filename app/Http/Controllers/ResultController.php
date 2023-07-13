<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Result::all();
        $user = User::all();
        return view('results.index', compact('result', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        return view('results/create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Result::create($request->all());
        return redirect()->route('result.create')->with('success', 'Resultado submetido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Result $result, $id)
    {
        $result = Result::findOrFail($id);
        $user = User::all();
        return view('results/show', compact('result','user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result, $id)
    {
        $result = Result::findOrFail($id);
        $user = User::all();
        return view('results/edit', compact('result','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Result $result, $id)
    {
        $result = Result::findOrFail($id);
        $result->update($request->all());
        return redirect()->route('results')->with('success', 'Resultado actualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result, $id)
    {
        $result = Result::findOrFail($id);
        $result->delete();
        return redirect()->route('results')->with('success', 'Resultado eliminado com sucesso!');
    }
    
}
