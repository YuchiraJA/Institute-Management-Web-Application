<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lesson;
use App\Models\Eclass;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use PDF;



use App\Models\Teacher;


class addLessonController extends Controller
{
    public function index(Request $request)
    {
        //return view('addLessons');

   $file=Lesson::all();
   return view('studentLessonview', compact('file'));

        /* $file=DB::table('lessons')
         ->join('eclasses', 'lessons.Subject', '=', 'eclasses.subject')
         
         ->where('eclasses.subject','=','Math')
         ->where('eclasses.grade','=',10)
         
         ->get();           
         return view('studentLessonview', compact('file'));*/


      /*  $file=DB::table('lessons')
        ->join ('eclasses', 'lessons.subject', '=', 'eclasses.subject')
        ->where('eclasses.subject', '=', 'Math')
        ->get();
        return view('studentLessonview', compact('file'));*/
    }
   
/*public function getsubjectjoin(Request $request){
    $file=Lesson::join('eclasses', 'lessons.subject', '=', 'eclasses.subject')
    ->select('eclasses.subject',
    'lessons.grade',
    'lessons.file')
    ->where('eclasses.subject','=', 'lessons.subject')
    ->get();

    return view('dashboard.user.studentLessonview', compact('file'));

}*/

    public function searchsubject(Request $request)
    {
        if($request ->isMethod('post'))
        {
            $name=$request->get('search');
            $file=Lesson::where('subject', 'LIKE', '%'. $name .'%')->paginate(10);
            //->where('subject','Math');
            //$file=Lesson::where( 'grade','LIKE', '%', '$name', '%')->paginate(5);
           
           

        }
        return view('studentLessonview', compact('file'));
    }








    public function store(Request $request){
         
       $request->validate([
            'file' => 'required|mimes:csv,txt,png,docx,jpg,mp4,xlx,xls,pdf|max:2048',
            'ClassLname'=>'required',
            'classLtype'=>'required',
            'classLSubject'=>'required',
            'grade'=>'required|min:1|max:3'
        ]);

            $fileModel = new Lesson;

            $file=$request->file;
            $fileName = time().'_'.$file->getClientOriginalName();
            $request->file->move('uploads/', $fileName);
            //$file = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->file=$fileName;
            $fileModel->l_name=$request->ClassLname;
            $fileModel->l_type=$request->classLtype;
            $fileModel->subject=$request->classLSubject;
            $fileModel->grade=$request->grade;
           // $fileModel->file = '/storage/' . $filePath;
            $fileModel->save();
            //return redirect()->back()->with('message', "The lesson is successfully added");
            return redirect()->back()->with('message', 'The lesson was added successfully to the system.');
            $data->Lesson::all();

            return view('editLessons')->with('lesson', $data);

    }


    public function show($id)
    {
        $file=Lesson::find($id);
        return view('fileview', compact('file'));
    }



    public function downloadf($file)
    {
        return response()->download('uploads/'.$file);
    }
    
    public function delete( $id)
    {
    
         $data=Lesson::find($id);
        $data->delete();
        session()->flash('message','new notification deleted successfully!');
        return redirect()->back();
    }


    public function update($id)
    {
        $data= Lesson::find($id);
        return view('updatelesson',compact('data'));
    }


    public function editLessonshow(Request $req)
    {
       
       $data=Lesson::find($req->id);
        $data->l_name=$req->ClassLname;
        $data->l_type=$req->classLtype;
       $data->subject=$req->classLSubject;
       $data->grade=$req->grade;
       $data->file=$req->file ('uploads/', $fileName);
       
       if(@request->hasfile('file')){

       }
        $data->save();
        session()->flash('message','new notification updated successfully!');
        return redirect('edit-lesson');
    }



//Lessons search option
public function Lsearch()
    {
        //return view('addLessons');

        $file=Lesson::all();
        return view('Lessonsearch', compact('file'));

    }


   /* public function filter($grade, $subject)
    {
        $file=Lesson::find($grade);
        return view('fileview', compact('file'));
        $file=Lesson::find($subject);
        return view('filterLesson', compact('file'));
    }*/
    
/*public function getLesson($subject)
{
    $no=DB::table('eclasses')
     ->join('lessons', 'eclasses.subject', '=', 'lessons.subject')
     ->select ('*')
     ->where('subject','=','$subject')
     ->get();

}*/

public function classRepo(){
   $userR= DB::select("select * from users");

    
    return view('classReport',['userR'=>$userR]);

}
 
public function downloadRep(){

    /*$pdfclass=\App::make('dompdf.wrapper');
    $pdfclass -> loadHTML($this->
    convert_userR_to_html());
    $pdfclass->stream();*/

    $userR = User::all();
    $pdfclass=PDF::loadview('dashboard.teacher.dulsaraReport', compact('userR'))->setOptions(['defaultFont' => 'sans-serif']);
    //$pdfclass->stream();
    
    return $pdfclass->download('classReport.pdf');



}

/*function convert_userR_to_html(){
    $userR = $this->get_userR();
    $output.='
    <section class="container">
  <form action="/class-report">
  {{@csrf_field()}}
<table class="table table-striped">
<thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Phone No</th>
            <th>Email</th>
        </tr>
        <tr></thead>
        
    ';
   
    foreach($userR as $userR){
    $output .='<tr>
    <td>{{$userR->id}}</td>
    <td>{{$userR->first_name}}</td>
    <td>{{$userR->last_name}}</td>
    <td>{{$userR->address}}</td>
    <td>{{$userR->mobile}}</td>
    <td>{{$userR->	email}}</td>
    
        </tr>
        endforeach

</table>
</form>
</section>';
$output .= '</table>';
return $output;
    }*/


}
