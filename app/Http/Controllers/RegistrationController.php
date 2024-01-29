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

    function update($id, Request $req) {

        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $student = Student::find($id);

        $student->name = $req['name'];
        $student->email = $req['email'];
        $student->password = $req['password'];
        $student->save();

        return redirect('student/view');
        
    }

    function delete($id) {

        if(is_null($id)){
            return redirect('student/view');
        }else{
            Student::find($id)->delete();
            return redirect()->back();
        }
        
    }
    
}
