<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Nilai;

class NilaiController extends Controller
{
    public function index()
    {
        $dataNilai = Nilai::with(['mahasiswa', 'matakuliah'])->get();
        return view('datanilai', compact('dataNilai'));
    }

    public function showNilaiMahasiswa($mahasiswaId) 
    { 
    $mahasiswa = Mahasiswa::find($mahasiswaId); 
  
    if (!$mahasiswa) { 
        return response()->json(['message' => 'Mahasiswa not found'], 404); 
    } 
  
    echo "Nama Mahasiswa: $mahasiswa->nama <br>"; 
  
    foreach ($mahasiswa->nilai as $nilai) { 
        $matakuliah = $nilai->matakuliah; 
        echo "Matakuliah: $matakuliah->nama | Nilai: $nilai->nilai <br>"; 
    
        }
    }
}