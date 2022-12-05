<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;
use PDF;

class AttendanceReportController extends Controller
{
    // public function getAttendance() {

    //     $students = Attendance::all();
    //     return view('dashboard.teacher.attendance-report', compact('students'));
    // }

    // function attendanceListShowData($id) {

    //     $data = Attendance::find($id);
    //     return view('dashboard.teacher.search-student',['data'=>$data]);
    // }

    public function getAttendance(){
        $attendance = Attendance::all();
        return view('dashboard.teacher.attendance-report', compact('attendance'));
    }

    public function downloadPDF(){
        $attendance = Attendance::all();
        $pdf = PDF::loadView('dashboard.teacher.attendance-report-new', compact('attendance'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('attendance.pdf'); 
    }
}
