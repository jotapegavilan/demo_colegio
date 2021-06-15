<?php

use App\Http\Controllers\ApoderadoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostulanteController;

//Route::get('/',[PostulanteController::class,'index'])->name('postulantes.index');

Route::get('postulantes/{postulante}', [PostulanteController::class,'show'])->name('postulantes.show');

Route::get('solicitud', [ApoderadoController::class,'first_step'])->name('apoderados.first_step');

Route::post('confirmacion', [ApoderadoController::class,'second_step'])->name('apoderados.second_step');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
