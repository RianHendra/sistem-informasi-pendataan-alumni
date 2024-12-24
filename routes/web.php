<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PersonalController;

// Route::get('/', function () {
//     return view('front.index');
// });

Route::get('/', [FrontController::class, 'index']);
Route::get('/personal', [PersonalController::class, 'index']);

