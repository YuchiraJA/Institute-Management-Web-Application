<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Financial_salary;
use DB;
class addSalaryController extends Controller
{
    //dd($request->all());
    public function store(Request $request){

        $salary = new Financial_salary;
        $salary->teacher_id=$request->Teacher_id;
        $salary->month=$request->month;
        $salary->amount=$request->amount;
        $salary->slip=$request->filename; 
        $salary->save();
        return redirect()->to('salarytable')->with('message','The salary was inserted successfully.');
    }



//{
// function show(){
//     $data = Financial_salary::all();
//     // return view('salarytable',['Financial_salary'=> $data]);
//     return view("salarytable",compact('data')); 
// }

//}

 public function showData($id)
{
//     // $salary = DB::table('Financial_salary')->where('id',$id)->first();
 $salary= Financial_salary::find($id);
// return view('editsalary',['data'=>$salary]);
//     //  return view('editsalary',compact('salary'));
 
            //$salary= DB::table('Financial_salary')->where('id',$id)->first();
            return view('editsalary', compact('salary'));
        }

    

 function updatesalary(Request $request){

    $salary = Financial_salary::find($request->id);
  
         $salary->teacher_id=$request->Teacher_id;
        $salary->month=$request->month;
        $salary->amount=$request->amount;
        // $salary->slip=$request->filename; 
        $salary->save();
        return redirect()->to('/salarytable')->with('message','The salary was updated successfully.');

}


public function searchsalary(Request $request){
    if($request ->method('post'))
    {
    $search = $request->get('search');
    $data = Financial_salary::where('teacher_id', 'like', $search.'%')->paginate(100);
    }
    return view('salarytable', ['data' => $data]);
    
    
    }


}