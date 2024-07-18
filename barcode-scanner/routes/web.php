<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScanController; 

Route::post('/scan', [ScanController::class, 'processScan']); 
Route::match(['get', 'post'], '/scan', [ScanController::class, 'scan']);

