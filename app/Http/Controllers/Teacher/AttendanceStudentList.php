<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Attendance;

class AttendanceStudentList extends Controller
{
    function AttendanceStudentList() {
        $data = User::all();
        return view('dashboard/teacher/mark-attendance', ['data'=>$data]);   
    }

    public function searchStudent() {
        $search_text = $_GET['query'];
        $students = DB::table('users')->where('id', 'LIKE', $search_text)->get();
        // $data = User::where('id', Auth::id(), '%'.$search_text.'%')->get();

        return view('dashboard/teacher/search-student', compact('students'));
    }

    // function createAttendance(Request $request) {

    //     $attendance = new Attendance();
    //     $attendance->id = $request->id;
    //     $attendance->first_name = $request->first_name;
    //     $attendance->last_name = $request->last_name;
    //     $attendance->email = $request->email;
    //     $attendance->mobile = $request->mobile;
    //     $attendance->grade = $request->grade;
    //     $attendance->subject = $request->subject;

    //     $save = $attendance->save();

    //     if( $save ){
    //         return redirect()->back()->with('success', 'You have successfully marked attendance of that student');
    //     }else {
    //         return redirect()->back()->with('fail', 'Something went wrong! failed to add attendance');
    //     }
    // }

    function createAttendanceShowData($id) {

        $data = User::find($id);
        return view('dashboard.teacher.student-attendance-details',['data'=>$data]);
    }

    function addAttendanceData(Request $request) {
        $attendance = new Attendance();
        $attendance->id = $request->id;
        $attendance->first_name = $request->first_name;
        $attendance->last_name = $request->last_name;
        $attendance->email = $request->email;
        $attendance->mobile = $request->mobile;
        $attendance->grade = $request->grade;
        $attendance->subject = $request->subject;
        $attendance->attendance = $request->attendance;

        $save = $attendance->save();

        if( $save ){
            return redirect()->back()->with('success', 'You have successfully marked attendance of that student');
        }else {
            return redirect()->back()->with('fail', 'Something went wrong! failed to add attendance');
        }  
    }
}
