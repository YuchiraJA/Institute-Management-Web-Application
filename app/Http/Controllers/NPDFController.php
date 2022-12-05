<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use PDF;

class NPDFController extends Controller
{
    public function getAllNotices()
    {
        $notices = Notice::where('user','Students')->get();
        return view('allnotices',compact('notices'));
    }

    public function downloadPDF()
    {
        $notices = Notice::where('user','Students')->get();
        $pdf = PDF::loadView('allnotices',['notices' => $notices])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('studentNotice.pdf');
    }

    public function getTeachNotices()
    {
        $notices = Notice::where('user','Teachers')->get();
        return view('allteachernotices',compact('notices'));
    }

    public function downloadtPDF()
    {
        $notices = Notice::where('user','Teachers')->get();
        $pdf = PDF::loadView('allteachernotices',['notices' => $notices])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('TeacherNotice.pdf');
    }


}
