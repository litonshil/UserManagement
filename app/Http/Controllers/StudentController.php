<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('student',['student' => $student]);
    }
    public function store(Request $request)
    {
       
        $test = $this->validate($request,[
            'studentid'=> 'required|max:255|unique:students',
            'studentname'=> 'required|max:255',
            'fathername'=> 'required|max:255',
            'mothername'=> 'required|max:255',
            'birthdate'=> 'required',
            'department'=> 'required|max:255',
            'email'=> 'required|email|max:255',
            'gender'=> 'required',
        ]);
        Student::create([
            'studentId' => $request->studentid,
            'studentName' => $request->studentname,
            'fathername' => $request->fathername,
            'mothername' => $request->mothername,
            'birthdate' => $request->birthdate,
            'department' => $request->department,
            'email' => $request->email,
            'gender' => $request->gender,

        ]);
        return redirect()->route('viewstudent');
       
    }
    public function viewstu()
    {
        $student = Student::all();
        return view('viewstudent',['student' => $student]);
    }
    public function studentedit(Request $request)
    {
        $student = Student::where('id', $request->id )->first();
        return view('updatestudent', ['student' => $student]);
    }
    public function updatestu(Request $request)
    {
        
        //$student = Student::where('studentId', $request->studentId )->first();
        //dd($request->id);
        Student::where('id', $request->id)->update(array(
            'studentId' => $request->studentid,
            'studentName' => $request->studentname,
            'fathername' => $request->fathername,
            'mothername' => $request->mothername,
            'birthdate' => $request->birthdate,
            'department' => $request->department,
            'email' => $request->email,
            'gender' => $request->gender,
        ));
        return redirect('viewstudent');
    }
    public function studentdelete(Request $request)
    {
        $student = Student::where('id', $request->id )->delete();
        return back();
    }
    
}
