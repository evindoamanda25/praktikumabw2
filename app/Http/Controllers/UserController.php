<?php

namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use App\Models\User; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash; 
use RealRashid\SweetAlert\Facades\Alert;
    
 class UserController extends Controller 
  { 
     public function showLoginForm() 
     { 
         return view('login'); 
     } 
   
     public function login(Request $request) 
     { 
         $credentials = $request->only('email', 'password'); 
   
         if (Auth::attempt($credentials)) { 
             // Autentikasi berhasil, redirect ke halaman home 
             return redirect()->intended('home'); 
         } else { 
             // Autentikasi gagal, kembali ke halaman login dengan pesan error 
             return redirect()->back()->withErrors(['email' => 'Invalid credentials.']); 
         } 
     } 
   
     public function showHome() 
     { 
         return view('home'); 
     } 

     public function showAdmin()
     {
        return view('admin');
     }

     public function showOwner()
     {
        return view('owner');
     }
   
     public function logout() 
     { 
        Auth::logout(); 
        return redirect('login'); 
     } 

      
    public function store(Request $request)         
    {             
        // Logika penyimpanan data 
            
        Alert::success('Success Title', 'Success Message');            
        return redirect()->back(); 
    } 
}