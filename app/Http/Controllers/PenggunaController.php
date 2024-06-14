<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna; // Memanggil model Pengguna, sesuaikan dengan namespace yang benar

class PenggunaController extends Controller
{
    public function index()
    {
        // Mengambil semua data pengguna
        $pengguna = Pengguna::all();
        
        // Mengirimkan data ke view 'pengguna'
        return view('pengguna', ['pengguna' => $pengguna]);
    }
}
