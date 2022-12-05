<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paper;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Librarian;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PaperController extends Controller
{
    public function storepaper(Request $request){

        //to check database connection, we use 'dd' command
        //dd($request->all());


        //create a new object for task model
        $Paper = new Paper;


       //validate Input data
       $this->validate($request,[
        'papername'=>'required|max:100|min:5', 
        'papertype'=>'required|max:100|min:1', 
        'year'=>'required|max:4|min:4', 
        'grade'=>'required|max:100|min:4', 
        'medium'=>'required|max:100|min:5', 
        'link'=>'required|max:500|min:5', 
      ]);
       

        $Paper->Paper_name=$request->papername;
        $Paper->Paper_type=$request->papertype;
        $Paper->Year=$request->year;
        $Paper->Grade=$request->grade;
        $Paper->Medium=$request->medium;
        $Paper->Paper_link=$request->link;
        //$save = $Paper->save();
        $Paper->save();

        return redirect()->back()->with('message', 'The paper was successfully added to the system.');


        //to return to specific route or page
        //return view('/tasks');

  

        //mage ara youtube video codes.    //data retriving using 'dd' cmd

        //$data=Paper::all();
        //dd($data); //testing one
        //  return view('dashboard.librarian.manage_papers')->with('papers',$data);


       //joel's valodation
        //if ($save) {
           // return redirect()->back()->with('success', 'You have successfully registerd to MicroEye as Student');
        //}else {
            //return redirect()->back()->with('fail', 'Something went wrong failed to register');
          //   }


    }
        
      
   


public function deletepaper($id){
    //find task laravel method
    $Paper=Paper::find($id);

    //delete laravel method
    $Paper->delete();
    return redirect()->back()->with('message', 'The paper item was deleted successfully.');    
}




public function updatepaperview($id){
    $Paper=Paper::find($id);

    return view('dashboard.librarian.updatepaper')->with('paperdata',$Paper);
}

public function updatepaper(Request $request){

       //validate Input data
       $this->validate($request,[
        'papername'=>'required|max:100|min:5', 
        'papertype'=>'required|max:100|min:1', 
        'year'=>'required|max:4|min:1', 
        'grade'=>'required|max:100|min:4', 
        'medium'=>'required|max:100|min:5', 
        'link'=>'required|max:500|min:5', 
      ]);


   // dd($request);
  $id_var=$request->id;
  $Paper_name_var=$request->papername;
  $Paper_type_var=$request->papertype;
  $Year_var=$request->year;
  $Grade_var=$request->grade;
  $Medium_var=$request->medium;
  $Paper_link_var=$request->link;



  $data=Paper::find($id_var);
  $data->Paper_name=$Paper_name_var;
  $data->Paper_type=$Paper_type_var;
  $data->Year=$Year_var;
  $data->Grade=$Grade_var;
  $data->Medium=$Medium_var;
  $data->Paper_link=$Paper_link_var;
  $data->save();
  $datas=Paper::all();
  //return view('manage_papers')->with('papers',$datas);
   //return redirect()->back();
  return redirect('/librarian/manage_papers')->with('message', 'The paper was updated successfully.');
}


public function search()
{
$Searchtext= $_GET['Searchtext'];
$data = Paper::where('Paper_name','LIKE',"%{$Searchtext}%")->get();

return view('dashboard.librarian.manage_papers')->with('papers',$data);


}


public function search1()
{
$Searchtext1= $_GET['Searchtext1'];
$data = Paper::where('Paper_name','LIKE',"%{$Searchtext1}%")->get();

return view('dashboard.user.view_papers')->with('papers',$data);
}


}