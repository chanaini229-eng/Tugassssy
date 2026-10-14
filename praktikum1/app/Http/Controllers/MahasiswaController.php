<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $nama = "sinta maharani";
        return view('mahasiswa', [
            'nama' => $nama
        ]);
    }
}