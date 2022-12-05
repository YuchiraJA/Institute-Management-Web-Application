<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class registerTeacherController extends Controller
{
    public function addTeacher(Request $request) {
        $teacher = new Teacher;
        $teacher -> name =  $request -> name;
        $teacher -> email =  $request -> email;
        $teacher -> password =  $request -> password;
        $teacher -> subject =  $request -> subject;
        
        $teacher -> save();
        return redirect() -> to ('/register-teacher'); 
    }
}
