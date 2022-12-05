<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class registerStudentController extends Controller
{
    public function addStudent(Request $request) {
        $student = new Student;
        $student -> f_name = $request -> first_name;
        $student -> l_name = $request -> last_name;
        $student -> email = $request -> email;
        $student -> password = $request -> password;
        $student -> address = $request -> address;
        $student -> mobile = $request -> mobile;

        $student -> save();
        return redirect()->to('/register-student');
    }
}
