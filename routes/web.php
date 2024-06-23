<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route set up
Route::get('/profile/{id}', [ProfileController::class, 'index']);
