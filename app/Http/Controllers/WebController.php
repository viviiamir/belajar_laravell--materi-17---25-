<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // Sesuaikan namespace dengan struktur direktori Anda

class WebController extends Controller
{
    public function index()
    {
        $artikel = Article::all();
        return view('article', ['artikel' => $artikel]);
    }
}
