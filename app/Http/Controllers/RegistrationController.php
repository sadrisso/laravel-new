<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class RegistrationController extends Controller
{
    function index() {
        return view('form');
    }

    function store(Request $req, Student $res) {

        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $res->fill($req->all())->save();
        
    }
}
