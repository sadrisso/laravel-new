<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class RegistrationController extends Controller
{

    public function index() 
    {
        $url = url('/register');
        $title = 'Student Registration';
        return view('form', compact('url', 'title'));
    }

    public function store(Request $req, Student $res) 
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $res->fill($req->all())->save();

        return redirect('student/view');
    }

    public function view() 
    {
        $student = Student::all();
        return view('student-view', compact('student'));
    }

    public function trash()
    {
        $student = Student::onlyTrashed()->get();
        return view('student-trash', compact('student'));
    }

    public function edit($id) 
    {
        $student = Student::find($id);
        if(!is_null($student))
        {
            $url = url('student/update'). '/' . $id;
            $title = 'Update Student Details';
            return view('form', compact('student', 'url', 'title'));
        }
            
        return view('student/view');
    }

    public function update($id, Request $std) 
    {
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

    public function delete($id) 
    {
        $student = Student::find($id);
        if(!is_null($student))
        {
            $student->delete();
        }  
        return redirect('student/view');
    } 
    
    public function restore($id)
    {
        $student = Student::withTrashed()->find($id);
        if(!is_null($student))
        {
            $student->restore();
        }
        return redirect('student/trash');
    }

    public function forceDelete($id)
    {
    $student = Student::withTrashed()->find($id);
    if(!is_null($student))
    {
        $student->forceDelete();
    }
        return redirect('student/trash');
    }

    public function upload()
    {
        return view('upload');
    }

    public function upload_store(Request $request)
    {
        $fileName = time(). 'drisso.' . $request->file('image')->getClientOriginalExtension();
        echo $request->file('image')->storeAs('uploads', $fileName);
    }
}
