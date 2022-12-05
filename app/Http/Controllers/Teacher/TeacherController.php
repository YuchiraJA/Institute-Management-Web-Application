<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use DB;

class TeacherController extends Controller
{
    function create(Request $request) {
        //validate inputs
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:teachers,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password',
            'subject'=>'required',
        ]);

        $teacher = new Teacher();
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->email = $request->email;
        $teacher->password = \Hash::make($request->password);
        $teacher->cpassword = \Hash::make($request->cpassword);
        $teacher->subject = $request->subject;

        $save = $teacher->save();

        if( $save ){
            return redirect()->back()->with('success', 'You have successfully registerd to MicroEye as Teacher');
        }else {
            return redirect()->back()->with('fail', 'Something went wrong failed to register');
        }
    } 
    function check(Request $request) {
        //validate Inputs
        $request->validate([
            'email'=>'required|email|exists:teachers,email',
            'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exist in MicroEye'
        ]);

        $creds = $request->only('email', 'password');

        if(Auth::guard('teacher')->attempt($creds)) {
            return redirect()->route('teacher.home');
        }else {
            return redirect()->route('teacher.login')->with('fail', 'Incorrect credentials! Please try again');
        }
    }

    function logout() {
        Auth::guard('teacher')->logout();
        return redirect('/');
    }

    function teacherList() {
        $data = DB::table('teachers')->where('id', Auth::id())->get();
        return view('dashboard/teacher/home', ['data'=>$data]);
    }

    function teacherShowData($id) {
        $data = Teacher::find($id);
        return view('dashboard/teacher/teacher-edit', ['data'=>$data]);
    }

    function teacherUpdateData(Request $req) {

        $req->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:teachers,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password',
            'subject'=>'required',
        ]);

        $data = Teacher::find($req->id);
        $data->first_name=$req->first_name;
        $data->last_name=$req->last_name;
        $data->email=$req->email;
        $data->password = \Hash::make($req->password);
        $data->cpassword = \Hash::make($req->cpassword);
        $data->subject = $req->subject;

        $data->save();
        return redirect()->route('teacher.home')->with('success', 'You have successfully updated your data');
    }
}
