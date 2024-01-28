<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'store']);
Route::get('/student/view', [RegistrationController::class, 'view']);
Route::get('/student/edit/{id}', [RegistrationController::class, 'edit']);
Route::get('/student/delete/{id}', [RegistrationController::class, 'delete']);