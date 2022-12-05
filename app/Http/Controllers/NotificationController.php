<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Nexmo\Laravel\Facade\Nexmo;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{

    public function save(Request $request){
   
   
        $notification = new Notification;
  
        $this->validate($request,['Title'=>'required|max:50|min:2'  ,]);
        $this->validate($request,['Notification'=>'required|max:191|min:10'  ,]);
        $this->validate($request,['Type'=>'required'  ,]);
        $this->validate($request,['StudentID'=>'required'  ,]);
        $this->validate($request,['Active'=>'required'  ,]);
  
        $notification->title=$request->Title; 
        $notification->notification=$request->Notification;
        $notification->type=$request->Type;
        $notification->student_id=$request->StudentID;
        $notification->active=$request->Active;
        $notification->created_by=$request->first_name;
       
        $notification->save();
     
        $data=Notification::all();
  
        session()->flash('message',$notification['Title'].'new notification added successfully!');

        return view('notificationmanage',['notificationmanage'=>$data]);
     
     
     
     
         }
    function delete($id){

        $notification = Notification::find($id);
        $notification->delete();

        $viewData=Notification::all();

        session()->flash('message','notification deleted successfully!');

        return view('notificationmanage',['notificationmanage'=>$viewData]);
    }


    function showData($id){

        $data = Notification::find($id);
        return view('editnotification',['data'=> $data]);
    }

function update(Request $req){

    $data = Notification::find($req->id);
    
    $this->validate($req,['Title'=>'required|max:50|min:2'  ,]);
    $this->validate($req,['Notification'=>'required|max:191|min:10'  ,]);
    $this->validate($req,['Type'=>'required'  ,]);
    $this->validate($req,['StudentID'=>'required'  ,]);
    $this->validate($req,['Active'=>'required'  ,]);

    $data->title=$req->Title; 
    $data->notification=$req->Notification;
    $data->type=$req->Type;
    $data->student_id=$req->StudentID;
    $data->active=$req->Active;

    $viewData = $data->save();

    $viewData=Notification::all();
 
    session()->flash('message',$data['Title'].'notification updated successfully!');

    return view('notificationmanage',['notificationmanage'=>$viewData]);
    
}

function shownoti($id){

    $data = Notification::find($id);
    return view('sendnotification',['data'=> $data]);
}

function showemail($student_id){

  //  $id=$request->StudentID;
 //dd($id);

    $emaildata =  DB::table('notifications')
    ->join('users','users.id',"=",'notifications.student_id')
    ->select('users.email','users.id','notifications.title','notifications.notification','notifications.type','notifications.student_id')
    ->where('notifications.student_id','=', $student_id)
    //->select('users.email')
    //->pluck('email')//groupby
    ->get();

   // echo ("$emaildata");
    //return $emaildata;
    return view('sendnotification',compact('studentemail'));
}

public function index()
{

    Nexmo::message()->send([
        'to' => '94710537085',
        'from' => 'Vonage APIs',
        'text' => 'Test SMS'
    ]);

    echo "Message sent!";
} 


}
