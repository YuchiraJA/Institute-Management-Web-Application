<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Librarian;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class FeedbackController extends Controller
{
    public function store(Request $request){
        //dd($request->all());
        $Feedback=new Feedback;

        // validate Input data
       $this->validate($request,[
        'Sname'=>'required|max:100|min:1', 
        'email'=>'required|max:100|min:1', 
        'feedbacktype'=>'required|max:100|min:1', 
        'message'=>'required|max:100|min:1', 
      ]);

        $Feedback->S_name=$request->Sname;
        $Feedback->S_email=$request->email;
        $Feedback->Feed_type=$request->feedbacktype;
        $Feedback->Feed_msg=$request->message;
        $Feedback->save();
        return redirect()->back()->with('message', 'Feedback was successfully added.');
     }
     
     
     public function deletefeedback($id){
        //find task laravel method
        $Feedback=Feedback::find($id);
    
        //delete laravel method
        $Feedback->delete();
        return redirect()->back()->with('message', 'The library item was deleted successfully.');    
    }
}



