<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegistrationController::class, 'index'])->name('register');
Route::post('/register', [RegistrationController::class, 'store'])->name('register');
Route::get('/student/view', [RegistrationController::class, 'view'])->name('student.view');
Route::get('/student/edit/{id}', [RegistrationController::class, 'edit'])->name('student.edit');
Route::get('/student/delete/{id}', [RegistrationController::class, 'delete'])->name('student.delete');
Route::post('/student/update/{id}', [RegistrationController::class, 'update'])->name('student.update');



//Session practice start

Route::get('get-all-session', function ()
{
    $session = session()->all();
    p($session);
});

Route::get('set-session', function (Request $req)
{
    $req->session()->put('user_name', 'shoeb drisso');
    $req->session()->put('user_id', '123');
    $req->session()->flash('status', 'success');
    return redirect('get-all-session');
});

Route::get('destroy-session', function()
{
    session()->forget('user_name');
    session()->forget('user_id');
    return redirect('get-all-session');
});

//Session practice end