<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalasngodingController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
            'numeric' => ':attribute harus diisi dengan angka ya cuy!!!',
        ];
        
        $request->validate([
            'nama' => 'required|min:3|max:10',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ], $messages);

        return view('proses', ['data' => $request]);
    }
}
