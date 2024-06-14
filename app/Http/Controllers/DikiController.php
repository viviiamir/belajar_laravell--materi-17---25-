<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class DikiController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota', ['anggota' => $anggota]);
    }
}
