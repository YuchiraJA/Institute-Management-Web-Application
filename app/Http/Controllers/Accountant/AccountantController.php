<?php

namespace App\Http\Controllers\Accountant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accountant;
use Illuminate\Support\Facades\Auth;
use DB;

class AccountantController extends Controller
{
    function check(Request $request) {
        //vaalidate inputs
        $request->validate([
            'email'=>'required|email|exists:accountants,email',
            'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exist in MicroEye'
        ]);

        $creds = $request->only('email', 'password');

        if(Auth::guard('accountant')->attempt($creds)) {
            return redirect()->route('accountant.home');
        }else {
            return redirect()->route('accountant.login')->with('fail', 'Incorrect credentials! Please try again');
        }
    }

    function logout() {
        Auth::guard('accountant')->logout();
        return redirect('/');
    }

    function accountantList() {

        $data = DB::table('accountants')->where('id', Auth::id())->get();
        return view('dashboard/accountant/home', ['data'=>$data]);
    }

    function accountantShowData($id) {
        $data = Accountant::find($id);
        return view('dashboard/accountant/accountant-edit', ['data'=>$data]);
    }

    function accountantUpdateData(Request $req) {
        $data = Accountant::find($req->id);
        $data->first_name=$req->first_name;
        $data->last_name=$req->last_name;
        $data->email=$req->email;
        $data->password = \Hash::make($req->password);
        $data->cpassword = \Hash::make($req->cpassword);

        $data->save();
        return redirect()->route('accountant.home')->with('success', 'You have successfully updated your data');
    }
}
