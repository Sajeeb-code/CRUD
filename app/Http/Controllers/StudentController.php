<?php

namespace App\Http\Controllers;


use App\Models\students_form;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        return view('student/create');
    }

    public function insert (Request $request)
    {
           $students = new students_form;

           $students ->student_name = $request->student_name;
           $students ->student_email = $request->student_email;
           $students ->student_address = $request->student_address;
           $students ->comments = $request->comments;
           $students->save();

           return redirect('create');
    }

    public function list(){
        
        $values = students_form::paginate(4);
        // print_r ($values);
        return view('student/list',compact('values'));
    }
}
