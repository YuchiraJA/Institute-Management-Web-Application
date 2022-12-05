<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Admin;
use App\Models\Librarian;
use App\Models\Accountant;

class ResetPasswordController extends Controller
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
    
}


