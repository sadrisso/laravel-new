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

        return redirect('student/view');
        
    }

    function view() {
        $student = Student::all();
        return view('student-view', compact('student'));
    }

    function edit($id) {
        $student = Student::find($id);
        if(is_null($student)){
             return redirect('student/view');
        }else{
            return view('form', compact('student'));
        }
    }
}
