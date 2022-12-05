<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

class UserController extends Controller
{
   public function create(Request $request) {
        //validate inputs
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password',
            'grade'=>'required',
            'subject'=>'required',
            'mobile'=>'required|numeric|digits:10',
            'address'=>'required',
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->cpassword = \Hash::make($request->cpassword);
        $user->grade = $request->grade;
        $user->subject = $request->subject;
        $user->mobile = $request->mobile;
        $user->address = $request->address;

        $save = $user->save();

        if ($save) {
            return redirect()->back()->with('success', 'You have successfully registerd to MicroEye as Student');
        }else {
            return redirect()->back()->with('fail', 'Something went wrong failed to register');
        }
    }

    function check(Request $request) {
        //validate inputs
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|max:30',
        ],[
            'email.exists'=>'This email is not exist in MicroEye'
        ]);

        $creds = $request->only('email', 'password');
        if(Auth::guard('web')->attempt($creds)) {
            return redirect()->route('user.home');
        }else {
            return redirect()->route('user.login')->with('fail', 'Incorrect credentials! Please try again');
        }
    }

    function logout() {
        Auth::guard('web')->logout();
        return redirect('/');
    }

    function userList() {
        $data = DB::table('users')->where('id', Auth::id())->get();
        return view('dashboard/user/home', ['data'=>$data]);
    }

    function userShowData($id) {
        $data = User::find($id);
        return view('dashboard/user/user-edit', ['data'=>$data]);
    }

    function userUpdateData(Request $req) {
        $data = User::find($req->id);
        $data->first_name=$req->first_name;
        $data->last_name=$req->last_name;
        $data->email=$req->email;
        $data->password = \Hash::make($req->password);
        $data->cpassword = \Hash::make($req->cpassword);
        $data->mobile = $req->mobile;
        $data->address = $req->address;

        $data->save();
        return redirect()->route('user.home')->with('success', 'You have successfully updated your data');
    }
}
