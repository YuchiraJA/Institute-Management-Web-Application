<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editLessonController extends Controller
{
    public function index(){
        $lesson = DB::select('select * from lessons');
        return view('editLessons',['lesson'=>$lesson]);
        }


        public function show($l_Id) {
            $lesson = DB::select('select * from lessons where id = ?',[$l_Id]);
            return view('updatelesson',['lesson'=>$lesson]);
            }

            public function edit(Request $request,$l_Id) {
                $l_name = $request->input('ClassLname');
                $l_type = $request->input('classLtype');
                $subject = $request->input('classLSubject');
                $grade=$request->input('grade');
                $file = $request->input('file');

                DB::update('update lessons set ClassLname = ?,classLtype=?,classLSubject=?,file=? where l_Id = ?',[$l_name,$l_type,$subject,$file,$l_Id]);
echo "Record updated successfully.";

}
}
