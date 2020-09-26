<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employe;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   public function index(){
      return view('employee');
   }

   public function store(Request $request){

    $validatedData = $request->validate([

         'name' => 'required|min:3|max:30|',
         'email' => 'required|min:5|max:30',
         'post' => 'required|min:4|max:30',
         'image' => 'required'

    ]);



    $employee = new Employee();

    $employee->name = $request->input('name');
    $employee->email = $request->input('email');
    $employee->post = $request->input('post');

    if($request->hasfile('image')){

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/employee/', $filename);
        $employee->image = $filename;
    }else{
          return $request;
          $employee->image = '';
      }

      $employee->save();

      $request->session()->flash('uspesno','Inserted successfully');
      return view('employee')->with('employee', $employee);


    }

    public function showing(){

        $employees = Employee::all();
        return view('employeeform', compact('employees'));

    }






   }

