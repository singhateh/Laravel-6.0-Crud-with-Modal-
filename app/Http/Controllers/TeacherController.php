<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
class TeacherController extends Controller
{
    public function Insert(Request $request){
      
        $teachers = new Student();
          
        $teachers->firstname = $request->input('firstname');
        $teachers->lastname = $request->input('lastname');
        $teachers->gender = $request->input('gender');
        $teachers->email = $request->input('email');
       
        $teachers->Save();

        return response()->json($teachers);


    }
}
