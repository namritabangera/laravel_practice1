<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        return "Student List";
    }

    public function disp(){
        $students=["Rahul","Priya","Amit"];
        return view('Studdisplay',compact('students'));
    }
}
