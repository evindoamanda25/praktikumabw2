<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;

#1


#2
Route::get('/halo/{nama}/{npm}', function ($nama, $npm) {
    return "Halo, $nama $npm!";
});

#3
Route::get('/', [GreetingsController::class, 'welcome']);
Route::get('/greet/{nama}/{npm}', [GreetingsController::class, 'greet']);