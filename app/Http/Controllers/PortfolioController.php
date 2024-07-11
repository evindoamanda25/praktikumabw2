<?php

// app/Http/Controllers/PortfolioController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('Home');
    }

    public function profil()
    {
        $nama = "Kelompok OLE (Olovian, Luthfi, Evindo)";
        $npm = "218160001, 218160006, 218160018";
        return view('Profil', compact('nama', 'npm'));
    }

    public function pendidikan()
    {
        $kampus = "Universitas Medan Area";
        $prodi = "Teknik Informatika";
        return view('Pendidikan', compact('kampus', 'prodi'));
    }

    public function keahlian()
    {
        $skill = "Coding, Bermain Game, Menyelesaikan masalah";
        return view('Keahlian', compact('skill'));
    }
}
