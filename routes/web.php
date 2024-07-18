<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;

#1


#2
Route::get('/halo/{nama}/{npm}', function ($nama, $npm) {
    return "Halo, $nama $npm!";
});

#4
Route::get('/', [GreetingsController::class, 'welcome']);
Route::get('/greet/{nama}/{npm}', [GreetingsController::class, 'greet']);

#Praktikum 3
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/profil', [PortfolioController::class, 'profil'])->name('profil');
Route::get('/pendidikan', [PortfolioController::class, 'pendidikan'])->name('pendidikan');
Route::get('/keahlian', [PortfolioController::class, 'keahlian'])->name('keahlian');

#praktikum 5
use App\Http\Controllers\NilaiController;
Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index'); 
Route::get('/nilai/{mahasiswaId}', [NilaiController::class,'ShowNilaiMahasiswa'])->name('tampilnilai'); 



#6
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login'); 
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']); 
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout'); 
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register'); 
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']); 
Route::get('/password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request'); 
Route::post('/password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email'); 
Route::get('/password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset'); 
Route::post('/password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update'); 

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;

Route::get('/login', function () { 
    return view('auth.login'); 
})->name('login'); 

Route::post('/login', [AuthController::class, 'cekLogin'])->name('cek-login'); 

Route::middleware('auth')->group(function () { 
Route::get('/dashboard', function () { 
       return view('dashboard'); 
})->name('dashboard'); 

Route::get('/logout', function(){
   Auth::logout();
   return redirect()->route('login')->with('success', 'Anda logged out.');
})->name('logout');
}); 


#8
use App\Http\Controllers\FileUploadController;

Route::get('file-upload', [FileUploadController::class, 'uploadForm']);
Route::post('file-upload', [FileUploadController::class, 'upload'])->name('file.upload');

Route::get('file-list', [FileUploadController::class, 'fileList']);

Route::delete('file-delete/{fileName}', [FileUploadController::class, 'deleteFile'])->name('file.delete');

#9
use App\Http\Controllers\ProductController;
Route::apiResource('categories', CategoryController::class);

Route::apiResource('products', ProductController::class);
Route::get('products/{id}/qrcode', [ProductController::class, 'generateQrCode']);
