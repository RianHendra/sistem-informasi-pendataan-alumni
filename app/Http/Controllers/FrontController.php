<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::with('jurusan')->get();

        return view('front.index', compact('alumnis'));
    }
}
