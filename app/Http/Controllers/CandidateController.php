<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Result;
use App\Models\Vacancie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use PDF;
use Barryvdh\DomPDF\Facade\Pdf;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidate = DB::table('candidates')->get();
        $candidate = Candidate::all();
        $totalCandidate = Candidate::count();
        $vacancie = Vacancie::all();
        $result = Result::all();
        return view('candidates.index', compact('candidate', 'vacancie', 'result', 'totalCandidate'));
    }

    public function exportPDF()
    {
        $candidate = DB::table('candidates')->get();
        $candidate = Candidate::all();
        $vacancie = Vacancie::all();
        $result = Result::all();
        $pdf = PDF::loadview('pdf-export', compact('candidate', 'vacancie', 'result'));
        return $pdf->download('candidatos.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $result = Result::all();
        $vacancie = Vacancie::all();
        return view('candidates/create', compact('vacancie', 'result'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Candidate::create($request->all());
        return redirect()->route('pack.index')->with('success', 'Candidatura submetida com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate $candidate, $id)
    {
        $candidate = Candidate::findOrFail($id);
        $vacancie = Vacancie::all();
        $result = Result::all();
        return view('candidates.show', compact('candidate','vacancie', 'result'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidate, $id)
    {
        $candidate = Candidate::findOrFail($id);
        $vacancie = Vacancie::all();
        $result = Result::all();
        return view('candidates/edit', compact('candidate','vacancie', 'result'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidate $candidate, $id)
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->update($request->all());
        return redirect()->route('candidates')->with('success', 'Candidato actualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate $candidate, $id)
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->delete();
        return redirect()->route('candidates')->with('success', 'Candidato eliminado com sucesso!');
    }
}
