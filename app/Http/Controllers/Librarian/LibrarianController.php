<?php

namespace App\Http\Controllers\Librarian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Librarian;
use Illuminate\Support\Facades\Auth;
use DB;

class LibrarianController extends Controller
{
    function check(Request $request) {
        //vaalidate inputs
        $request->validate([
            'email'=>'required|email|exists:librarians,email',
            'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exist in MicroEye'
        ]);

        $creds = $request->only('email', 'password');

        if(Auth::guard('librarian')->attempt($creds)) {
            return redirect()->route('librarian.home');
        }else {
            return redirect()->route('librarian.login')->with('fail', 'Incorrect credentials! Please try again');
        }
    }

    function logout() {
        Auth::guard('librarian')->logout();
        return redirect('/');
    }

    function librarianList() {
        $data = DB::table('librarians')->where('id', Auth::id())->get();
        return view('dashboard/librarian/home', ['data'=>$data]);
    }

    function librarianShowData($id) {
        $data = Librarian::find($id);
        return view('dashboard/librarian/librarian-edit', ['data'=>$data]);
    }

    function librarianUpdateData(Request $req) {
        $data = Librarian::find($req->id);
        $data->first_name=$req->first_name;
        $data->last_name=$req->last_name;
        $data->email=$req->email;
        $data->password = \Hash::make($req->password);
        $data->cpassword = \Hash::make($req->cpassword);

        $data->save();
        return redirect()->route('librarian.home')->with('success', 'You have successfully updated your data');
    }
}
