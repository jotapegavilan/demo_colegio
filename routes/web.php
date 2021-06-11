<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostulanteController;

Route::get('/',[PostulanteController::class,'index'])->name('postulantes.index');

Route::get('postulantes/{postulante}', [PostulanteController::class,'show'])->name('postulantes.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
