<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Form;

class FormController extends Controller
{
    public function index(){

        return view('multi-step-form');
    }

    public function forms(Request $request){

          $form = new Form();
          $form->firstname = $request->input('firstname');
          $form->lastname = $request->input('lastname');
          $form->email = $request->input('email');
          $form->phone = $request->input('phone');
          $form->msg = $request->input('msg');

          $form->save();

          $request->session()->flash('dobra', 'Inserted successfuly');
          return view('form')->with('form',$form);



    }
}
