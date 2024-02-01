<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class RegistrationController extends Controller
{
    function index() {
        $url = url('/register');
        $title = 'Student Registration';
        return view('form', compact('url', 'title'));
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
            $url = url('student/update'). '/' . $id;
            $title = 'Update Student Details';
            return view('form', compact('student', 'url', 'title'));
        }
        
    }

    function update($id, Request $std) {

        $std->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $student = Student::find($id);

        $student->name = $std['name'];
        $student->email = $std['email'];
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
