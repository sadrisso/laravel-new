<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function index() {
        return view('form');
    }

    function store(Request $req) {

        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        
        print_r($req->all());
    }
}
