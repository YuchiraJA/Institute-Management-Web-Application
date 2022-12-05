<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule; 
use Illuminate\Support\Facades\DB;
use PDF;

class CreateController extends Controller
{
    public function store(Request $request){


        $request->validate([

            'grade'=>'required',

            'subject'=>'required',

            'topic'=>'required|min:6',

            //'start_date'=>'required',

            //'start_time'=>'required',

            //'end_date'=>'required',

            //'end_time'=>'required',

            'link'=>'required',

            'description'=>'required|min:8',

        ]);

        $schedule=new Schedule;
        $schedule->grade=$request->grade;
        $schedule->subject=$request->subject;
        $schedule->topic=$request->topic;
        $schedule->start_date=$request->sDate;
        $schedule->start_time=$request->sTime;
        $schedule->end_date=$request->eDate;
        $schedule->end_time=$request->eTime;
        $schedule->link=$request->link;
        $schedule->description=$request->description;
        $schedule->save();
        session()->flash('message','The schedule was successfully added...!');
        return redirect()->back();

        //dd($request->all());

    }
    function edit()
    {
        $data=Schedule::all();
        return view('dashboard.teacher.edit',['schedules'=>$data]);

    }
    function delete($id)
    {
        $data=Schedule::find($id);
        $data->delete();
        session()->flash('message','The schedule was successfully deleted...!');
        return redirect('/teacher/edit');
    }
    function showData($id)
    {
        $data=Schedule::find($id);
        return view('dashboard.teacher.scheduleUpdate',['data'=>$data]);
    }
    function updateData(Request $request)
    {
        $data=Schedule::find($request->id);
        $data->grade=$request->grade;
        $data->subject=$request->subject;
        $data->topic=$request->topic;
        $data->start_date=$request->sDate;
        $data->start_time=$request->sTime;
        $data->end_date=$request->eDate;
        $data->end_time=$request->eTime;
        $data->link=$request->link;
        $data->description=$request->description;
        $data->save();
        session()->flash('message','The schedule was successfully updated...!');
        return redirect('/teacher/edit');

    }

    // function techerSchedule()
    // {
    //     $data=Schedule::all();
    //     return view('techerSchedule',['schedules'=>$data]);
    // }

    function teacherScheduleData()
    {
        $data=Schedule::all();
        return view('dashboard.teacher.teacherSchedule',['schedules'=>$data]);
    }

    function studentScheduleData()
    {
        $data=Schedule::all();
        return view('dashboard.user.studentSchedule',['schedules'=>$data]);
    }

    public function search()
    {
        $searchGrade = $_GET['searchGrade'];
        $data = Schedule::where('grade','LIKE',"%{$searchGrade}%")->get();

        return view('dashboard.teacher.scheduleSearch')->with('schedules',$data);    
    }

    public function editDownloadPdf()
    {
        $data = Schedule::all();
        $pdf = PDF::setOptions(['defaultFont' => 'dejavu serif'])->loadView('pdfDownload',['schedules'=>$data]);
        return $pdf->download('schedules.pdf');
    }

    function pdfDownload()
    {
        $data=Schedule::all();
        return view('pdfDownload',['schedules'=>$data]);
    }
    
}
