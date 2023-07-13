<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vacancie;
use  Illuminate\Http\Request;

class VacancieController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        $user = User::all();
        $vacancie = Vacancie::all();
        return view('vacancie.index', compact('vacancie', 'user'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        $user = User::all();
        $vacancie = Vacancie::all();
        return view('vacancie.create', compact('vacancie', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Vacancie::create($request->all());
        return redirect()->route('vacancie.create')->with('success', 'Vagas submetidas com sucesso!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacancie $vacancie, $id)
    {
        $vacancie = Vacancie::findOrFail($id);
        $user = User::all();
        return view('vacancie/show', compact('vacancie', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancie $vacancie, $id)
    {
        $vacancie = Vacancie::findOrFail($id);
        $user = User::all();
        return view('vacancie/edit', compact('vacancie', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacancie $vacancie, $id)
    {
        $vacancie = Vacancie::findOrFail($id);
        $vacancie->update($request->all());
        return redirect()->route('vacancies')->with('success', 'Vagas actualizadas com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancie $vacancie, $id)
    {
        $vacancie = Vacancie::findOrFail($id);
        $vacancie->delete();
        return redirect()->route('vacancies')->with('success', 'Vagas eliminadas com sucesso!');
    }
}
