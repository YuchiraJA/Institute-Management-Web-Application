<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class StudentListController extends Controller
{
    function studentList() {
        $data = User::all();
        return view('dashboard/admin/student-list', ['data'=>$data]);   
    }

    function studentDelete($id) {
        $data = User::find($id);
        $data->delete();

        return redirect('admin/student-list');
    }
} 
