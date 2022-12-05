<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Admin;
use App\Models\Librarian;
use App\Models\Accountant;
use Password;
use Auth;

class AdminResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo() {
        // if(Auth()->user()->role == 'user'){
        //     return 'user/home';
        // }elseif(Auth()->user()->role == 'admin') {
        //     return 'admin/home';
        // }elseif(Auth()->user()->role == 'teacher') {
        //     return 'teacher/home';
        // }
        return "/select-type-login";
    } 

    public function __construct() {
        $this->middleware('guest:admin');
    }

    protected function guard() {
        return Auth::guard('admin');
    }

    protected function broker() {
        return Password::broker('admins');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset-admin')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    
}


