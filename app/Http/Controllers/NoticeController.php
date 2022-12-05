<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;


class NoticeController extends Controller
{
  
    public function save(Request $request){
   
   
      $notice = new Notice;

      $this->validate($request,['Title'=>'required|max:50|min:2'  ,]);
      $this->validate($request,['Details'=>'required|max:191|min:10'  ,]);
      $this->validate($request,['User'=>'required'  ,]);
      $this->validate($request,['Active'=>'required'  ,]);


      $notice->title=$request->Title; 
      $notice->details=$request->Details;
      $notice->user=$request->User;
      $notice->active=$request->Active;
      $notice->created_by=$request->first_name;
     
      $notice->save();
   
      $data=Notice::all();

      session()->flash('message',$notice['Title'].'new notice added successfully!');
     
     return view('dashboard.teacher.noticemanage',['noticemanage'=>$data]);
  
    // return view('/teachernotice');
   
   
   
   
   
       }
   
 

function deleten($id){

  $data = Notice::find($id);
  $data -> delete();

  $viewData=Notice::all();

  session()->flash('message','notice deleted successfully!');

 return view('dashboard.teacher.noticemanage',['noticemanage'=>$viewData]);


}





function showdata($id){

 
  $data = Notice::find($id);
  return view('updatenotice',['data'=> $data]);
}

 function update(Request $request){

 
  $data = Notice::find( $request->id);
   $data->title=$request->Title;
   $data->details=$request->Details;
   $data->user=$request->User;
   $data->active=$request->Active;

   $viewData = $data->save();

   $viewData=Notice::all();

   session()->flash('message',$data['Title'].'notice updated successfully!');

   return view('dashboard.teacher.noticemanage',['noticemanage'=>$viewData]);
 
  
}





function fetchsn(){
$data = Notice::where('user','Students')->get();

   return view('dashboard.user.studentnotice',['notices'=>$data]);
}


function fetchtn(){
   $data = Notice::where('user','Teachers')->get();
   
     return view('dashboard.teacher.teachernotice',['notices'=>$data]);
   }


   
public function studentsearch(Request $request){

$search =$request->get('search');
$notices =DB::table('notices')->where('Title','like','%'.$search.'%')->where('User','Students')->get();
$notices =DB::table('notices')->where('Details','like','%'.$search.'%')->where('User','Students')->get();
//$notices =DB::table('notices')->where('Active','like','%'.$search.'%')->where('User','Students')->get();

  return view('studentnotice',compact('notices'));
}

public function teachersearch(Request $request){

  $search =$request->get('search');
  $notices =DB::table('notices')->where('Title','like','%'.$search.'%')->where('User','Teachers')->get();
  $notices =DB::table('notices')->where('Details','like','%'.$search.'%')->where('User','Teachers')->get();
 //$notices =DB::table('notices')->where('Active','like','%'.$search.'%')->where('User','Teachers')->get();
  
    return view('teachernotice',compact('notices'));
  }

}
