<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsercController extends Controller
{
    //
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        dd($user);
    }

    public function student(){
        return view('students.student');
    }

    public function instrutor(){
        return view('instrutores.instrutor');
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('users.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     User::create($request->all());

    //     return redirect()->route('auth.log')->with('success', 'Produto adicionado com sucesso');

    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(User $user)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit($id)
    // {
    //     $users = User::findOrFail($id);

    //     return view('users.edit', compact('users'));

    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, $id)
    // {
    //     $users = User::findOrFail($id);

    //     $users->update($request->all());

    //     return redirect()->route('users.index')->with('success', 'product updated successfully');

    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy($id)
    // {
    //     $users = User::findOrFail($id);

    //     $users->delete();

    //     return redirect()->route('users.index')->with('success', 'product deleted successfully');

    // }
}
