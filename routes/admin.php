<?php

use App\Http\Controllers\Admin\ApoderadoController;
use App\Http\Controllers\Admin\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostulanteController;
use App\Http\Controllers\Admin\UserController;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('', [HomeController::class,'index'])->middleware('can:admin.index','verified')->name('admin.index');
Route::resource('/users', UserController::class)->names('admin.users');
Route::resource('/cursos', CursoController::class)->names('admin.cursos');
Route::resource('/postulantes', PostulanteController::class)->names('admin.postulantes');
Route::resource('/apoderados', ApoderadoController::class)->names('admin.apoderados');