<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;



use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Librarian;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class MaterialController extends Controller
{
    public function storematerial(Request $request){

        //to check database connection, we use 'dd' command
        //dd($request->all());


        //create a new object for task model
        $Material = new Material;


      // validate Input data
       $this->validate($request,[
        'materialname'=>'required|max:100|min:4', 
        'teachername'=>'required|max:100|min:4', 
        'materialdetails'=>'required|max:100|min:5', 
        'drivelink'=>'required|max:500|min:5',
      ]);
       
      $Material->Teacher_name=$request->teachername;
        $Material->Material_name=$request->materialname;
        $Material->Material_details=$request->materialdetails;
        $Material->Drive_link=$request->drivelink;
        $Material->save();
        return redirect()->back()->with('message', 'The more reading materials was successfully added to the system.');
        //to return to specific route or page
        //return view('/tasks');

  
        //data retriving using 'dd' cmd
        //$data=Material::all();
        //dd($data);

        
      // return view('dashboard.librarian.manage_materials')->with('materials',$data);
        
}



public function deletematerial($id){
    //find task laravel method
    $Material=Material::find($id);

    //delete laravel method
    $Material->delete();
    return redirect()->back()->with('message', 'The material was deleted successfully.');    
}




public function updatematerialview($id){
    $Material=Material::find($id);

    return view('dashboard.librarian.updatematerial')->with('materialdata',$Material);
}

public function updatematerial(Request $request){
   //dd($request);
  $id_var=$request->id;
  $Teacher_name_var=$request->teachername;
  $Material_name_var=$request->materialname;
  $Material_details_var=$request->materialdetails;
  $Drive_link_var=$request->drivelink;

  $data=Material::find($id_var);
  $data->Teacher_name=$Teacher_name_var;
  $data->Material_name=$Material_name_var;
  $data->Material_details=$Material_details_var;
  $data->Drive_link=$Drive_link_var;
  $data->save();
  $datas=Material::all();
  //return view('manage_libraryitems')->with('libraryitems',$datas);
  return redirect('/librarian/manage_materials')->with('message', 'The material was deleted successfully.');

  }

  public function search()
  {
  $Searchtext= $_GET['Searchtext'];
  $data =Material::where('Material_Name','LIKE',"%{$Searchtext}%")->get();

  return view('dashboard.librarian.manage_materials')->with('materials',$data);
 

  }


  public function search1()
  {
  $Searchtext1= $_GET['Searchtext1'];
  $data = Material::where('Material_Name','LIKE',"%{$Searchtext1}%")->get();

  return view('dashboard.user.view_materials')->with('materials',$data);
  }

}



/*
public function downloadProgrseeReport($std_id)

{

    $student = Finalresult::join('exams', 'exams.id', '=', 'finalresults.e_id')

    ->select('exams.e_title',

            'exams.subject',

            'exams.e_type',

            'finalresults.marks',

            'finalresults.feedback',

        )  

    ->where('finalresults.std_id', '=', $std_id)

    ->get();

   

    $pdf = PDF::loadView('dashboard.user.std-progress-report-view',compact('student'))->setOptions(['defaultFont' => 'sans-serif']);

    return $pdf->download('MyReport.pdf');

}

*/