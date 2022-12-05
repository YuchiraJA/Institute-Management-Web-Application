<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eclass;
use App\Models\Lesson;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

class classmakingController extends Controller
{
    public function classmake(Request $request){
       
        //dd($request->all());

        $request->validate([
            'classType'=>'required|max:1000|min:2',
            'classSubject'=>'required|max:1000|min:5',
            'classFee'=>'required|numeric|digits:4',
            'classGrade'=>'required|min:1|max:3'

        ]);

        $data=new Eclass;
        $data->c_type=$request->classType;
        $data->subject=$request->classSubject;
        $data->fee=$request->classFee;
        $data->grade=$request->classGrade;

        $data->save();      
        return redirect()->back()->with('message', 'The class was added successfully to the system.');


        $data->Eclass::all();

        return view('editClass')->with('class', $data);
    }

    public function delete($id)
    {
        $data=Eclass::find($id);
        $data->delete();
        session()->flash('message','class deleted successfully!');
        return redirect()->back();
    }

    public function update($id)
    {
        
        $data= Eclass::find($id);
        session()->flash('message','class updated successfully!');
        return view('updateClass',['data'=>$data]);

    }

    public function updateshow(Request $req)
    {
        $data=Eclass::find($req->id);
        $data->c_type=$req->classType;
        $data->subject=$req->classSubject;
        $data->grade=$req->classGrade;
        $data->fee=$req->classFee;
        $data->save();
       
        return redirect('/teacher/edit-class')->with('message', "The class is successfully updated");
    }




    public function searchL(Request $request)
    {
        if($request ->isMethod('post'))
        {
            $name=$request->get('search');
            $class=Eclass::where('id', 'LIKE', '%'. $name .'%')->paginate(10);
            //->where('subject','Math');
            //$file=Lesson::where( 'grade','LIKE', '%', '$name', '%')->paginate(5);
           
           

        }
        return view('Lessonsearch', compact('class'));
    }


//search student details in report


public function searchstID(Request $request)
{
    if($request ->isMethod('post'))
    {
        $name=$request->get('search');
        $userR=user::where('id', 'LIKE', '%'. $name .'%')->paginate(10);
        //->where('subject','Math');
        //$file=Lesson::where( 'grade','LIKE', '%', '$name', '%')->paginate(5);
       
       

    }
    return view('classReport', compact('userR'));
}




//maths class
    public function Math()
    {
      
        $class= DB::table('eclasses')->get()
        ->where('subject','Math');
        
        return view('Lessonsearch', ['class'=>$class]);
    
    }
    
//science clz
public function science()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','science');
    
    return view('Lessonsearch', ['class'=>$class]);

}


//ICT clz
public function ICT ()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','ICT');
    
    return view('Lessonsearch', ['class'=>$class]);

}

//sinhala clz
public function Sinhala ()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Sinhala');
    
    return view('Lessonsearch', ['class'=>$class]);

}


//english clz
public function English()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','English');
    
    return view('Lessonsearch', ['class'=>$class]);

}

//tamil clz
public function Tamil  ()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Tamil');
    
    return view('Lessonsearch', ['class'=>$class]);

}


//Music clz
public function Music ()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Music');
    
    return view('Lessonsearch', ['class'=>$class]);

}

//History clz
public function History ()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','History');
    
    return view('Lessonsearch', ['class'=>$class]);

}

//History clz
public function Elit()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Elit');
    
    return view('Lessonsearch', ['class'=>$class]);

}

//comz clz
public function Commerce()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Commerce');
    
    return view('Lessonsearch', ['class'=>$class]);

}


//physics clz

public function Physics()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Physics');
    
    return view('Lessonsearch', ['class'=>$class]);

}

//biology clz

public function Biology()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Biology');
    
    return view('Lessonsearch', ['class'=>$class]);

}

//Chemistry clz

public function Chemistry()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Chemistry');
    
    return view('Lessonsearch', ['class'=>$class]);

}


//physics ppr  clz

public function phypaper()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Physics paper Class');
    
    return view('Lessonsearch', ['class'=>$class]);

}


//Chemistry ppr clz

public function chempaper()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Chemistry Paper Class');
    
    return view('Lessonsearch', ['class'=>$class]);

}

//Bio ppr clz

public function biopaper()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Biology Paper Class');
    
    return view('Lessonsearch', ['class'=>$class]);

}


//com math clz

public function comMath()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Combined Math');
    
    return view('Lessonsearch', ['class'=>$class]);

}

//com ppr clz

public function comppr()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Combined Paper Class');
    
    return view('Lessonsearch', ['class'=>$class]);

}
//bs clz

public function BS()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Buisness Studies');
    
    return view('Lessonsearch', ['class'=>$class]);

}

//Accounting clz

public function AC()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Accounting');
    
    return view('Lessonsearch', ['class'=>$class]);

}


//Econ clz

public function Econ()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Economics');
    
    return view('Lessonsearch', ['class'=>$class]);

}

//Bppr clz

public function BSppr()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Buisness paper Class');
    
    return view('Lessonsearch', ['class'=>$class]);

}
//ACpr clz

public function ACppr()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Accounting Paper Class');
    
    return view('Lessonsearch', ['class'=>$class]);

}

//Econppr clz

public function ECppr()
{
  
    $class= DB::table('eclasses')->get()
    ->where('subject','Economics Paper Class');
    
    return view('Lessonsearch', ['class'=>$class]);

}

public function index(Request $request){
    
    $file=DB::table('lessons')
    ->join ('eclasses', 'lessons.subject', '=', 'eclasses.subject')
    ->where('eclasses.subject', '=', 'lessons.subject')
    ->get();
    return view('studentLessonview', compact('file'));
}

}
