<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherListController extends Controller
{
    function teacherList() {
        $data = Teacher::all();
        return view('dashboard/admin/teacher-list', ['data'=>$data]);  
    }

    function teacherDelete($id) {
        $data = Teacher::find($id);
        $data->delete();

        return redirect('admin/teacher-list');
    }
}
