<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegistrationController::class, 'index'])->name('register');
Route::post('/register', [RegistrationController::class, 'store']);
Route::get('/student/view', [RegistrationController::class, 'view'])->name('student.view');
Route::get('/student/edit/{id}', [RegistrationController::class, 'edit']);
Route::get('/student/delete/{id}', [RegistrationController::class, 'delete'])->name('student.delete');
Route::get('/student/update/{id}', [RegistrationController::class, 'update']);
