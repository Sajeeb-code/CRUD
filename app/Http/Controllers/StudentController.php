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
    //insert data
    public function insert (Request $request)
    {
            // make object of model
           $students = new students_form;

           $students ->student_name = $request->student_name;
           $students ->student_email = $request->student_email;
           $students ->student_address = $request->student_address;
           $students ->comments = $request->comments;
           $students->save();

           return redirect('create');
    }
    //read data
    public function list(){
        
        $values = students_form::paginate(4);
        // print_r ($values);
        return view('student/list',compact('values'));
    }

    // delete data
    public function delete ($id){
        $data = students_form::find($id);

        $data->delete();

        return redirect('list');

    }

    //edit data
    public function edit($id)
    {
        $values = students_form::find($id);

        return view('student/edit',compact('values'));
    }
    public function update(Request $request){

        $students = students_form::find($request->id);

        $students->student_name = $request->student_name;
        $students->student_email = $request->student_email;
        $students->student_address = $request->student_address;
        $students->comments = $request->comments;

        $students->save();

        return redirect('list');
    }

}
