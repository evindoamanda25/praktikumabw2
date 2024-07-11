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
