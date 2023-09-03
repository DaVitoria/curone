<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Vacancie;
use Illuminate\Http\Request;

class MainnController extends Controller
{
    //
    public function index(){
        $vanckey = Vacancie::all();
        return view('auto/index', compact('vanckey'));
    }

    public function pain(){
        $pain = Vacancie::all();
        $result= Result::all();
        return view('auto/pain', compact('pain', 'result'));
    }
}
