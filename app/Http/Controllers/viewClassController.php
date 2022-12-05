<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewClassController extends Controller
{
    public function view($id){
        $task->Eclass::all();
        return view('editclass')->with('class', $task);
    }
}
