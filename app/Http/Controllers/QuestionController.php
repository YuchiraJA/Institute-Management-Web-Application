<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;


class QuestionController extends Controller
{
    function addData (Request $req){
        $question = new Question;
        $question-> Title = $req->Title;
        $question-> Category = $req->Category;
        $question-> Description = $req->Description;
        $question-> Student_ID = $req->user_id;

        $question->save();
        return redirect()->route('user.academic-related-trending');
     }

     public function show()
     {  
      $data = DB::table('questions')->where('Category', 'Academic Related Question')->get();
      return view('dashboard.user.academic-related-trending', ['questions'=>$data]);
    }

    // function showSingleAQ() {
    //   return view('dashboard.user.show-single-aq');
    // }

    function showSingleAQ($id) {
      
      $data = Question::find($id);
      return view('dashboard.user.single-aq', ['data'=>$data]);
    }

    public function qSearch() {
      $search_text = $_GET['query'];
      $questions = DB::table('questions')->where('Title', 'LIKE', '%'.$search_text.'%')->get();

      return view('dashboard/user/q-search',compact('questions'));
    }
                                        
    public function showMyQuestion($id) {
      $data = DB::table('questions')  
      ->select('id',
              'Title', 
              'Description'
      )
      ->where('Student_ID', $id)
      ->get();
      return view('dashboard.user.my-ques', compact('data'));
    }

    public function showUpdateData($id) {
      $update_data = Question::find($id);
      return view('dashboard.user.ques-edit', compact('update_data'));
    }


    public function showDeleteData($id){
       //find task laravel method
       $question= Question::find($id);
      //delete laravel method
       $question->delete();
      return redirect()->back();    
     }

    
    public function showUpdateData1(Request $request){

       //dd($request);
      $id_var=$request->id;
      $Item_name_var=$request->Title;
      $Author_var=$request->Description;


      $data=Question::find($id_var);
      $data->Title=$Item_name_var;
      $data->Description=$Author_var;
    
      $data->save();

      return redirect()->route('user.academic-related-trending');

        }


   
}
