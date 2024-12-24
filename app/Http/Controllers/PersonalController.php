<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $personals = Personal::all();
        $kelompoks = Kelompok::first();
        return view('personal.front', compact('personals', 'kelompoks'));
    }
}
