<?php

use App\Http\Controllers\Admin\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostulanteController;
use App\Http\Controllers\Admin\UserController;

Route::get('', [HomeController::class,'index'])->name('admin.index');
Route::resource('users', UserController::class)->names('admin.users');
Route::resource('/cursos', CursoController::class)->names('admin.cursos');
Route::resource('/postulantes', PostulanteController::class)->names('admin.postulantes');
Route::resource('/apoderados', CursoController::class)->names('admin.apoderados');