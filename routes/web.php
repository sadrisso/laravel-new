<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'student'], function()
{
    Route::get('register', [RegistrationController::class, 'index'])->name('register');
    Route::post('register', [RegistrationController::class, 'store'])->name('register');
    Route::get('view', [RegistrationController::class, 'view'])->name('student.view');
    Route::get('edit/{id}', [RegistrationController::class, 'edit'])->name('student.edit');
    Route::get('delete/{id}', [RegistrationController::class, 'delete'])->name('student.delete');
    Route::post('update/{id}', [RegistrationController::class, 'update'])->name('student.update');
    Route::get('trash', [RegistrationController::class, 'trash'])->name('student.trash');
    Route::get('restore/{id}', [RegistrationController::class, 'restore'])->name('student.restore');
    Route::get('forceDelete/{id}', [RegistrationController::class, 'forceDelete'])->name('forceDelete');
    Route::get('upload', [RegistrationController::class, 'upload'])->name('file.upload');
    Route::post('upload', [RegistrationController::class, 'upload_store'])->name('file.upload');
});



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