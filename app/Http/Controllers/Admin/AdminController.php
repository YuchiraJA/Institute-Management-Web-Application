<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function check(Request $request) {
        //validate inputs
        $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30',
        ],[
            'email.exists'=>'This email is not exist in MicroEye'
        ]);

        $creds = $request->only('email', 'password');

        if(Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('admin.login')->with('fail', 'Incorrect credentials! Please try again');
        }
    }

    function logout() {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    function adminList() {
        
        $data = DB::table('admins')->where('id', Auth::id())->get();
        return view('dashboard/admin/home', ['data'=>$data]);

    }

    function adminShowData($id) {
        
        // $data = DB::table('admins')->where('id', Auth::id())->get();
        // return view('dashboard/admin/edit', ['data'=>$data]);

        $data = Admin::find($id);
        return view('dashboard/admin/edit', ['data'=>$data]);
        
        // $user = Auth::user();
        // return view('dashboard.admin.edit')->with(['users' => $user]);
        
        // $data = DB::table('admins')->find('Auth::id()');
        // return $user;
    }

    function adminUpdateData(Request $req) {
        $data = Admin::find($req->id);
        $data->first_name=$req->first_name;
        $data->last_name=$req->last_name;
        $data->email=$req->email;
        $data->password = \Hash::make($req->password);
        $data->cpassword = \Hash::make($req->cpassword);

        $data->save();
        return redirect()->route('admin.home')->with('success', 'You have successfully updated your data');
    }

    // function adminDelete($id) {
    //     $data = Admin::find($id);
    //     $data->delete();

    //     return redirect('admin/home');
    // }

    // function destroy($id) {
    //     $admin = Admin::find($id);
    //     $admin = delete();

    //     return redirect('admin/home');
    // }

    // function showData($id) {

    //     $user = DB::table('users')->find($Auth::guard('admin')->user()->id);

    //     return $user;
    // }
}
     