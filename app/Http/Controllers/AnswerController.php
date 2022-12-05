<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
use DB;

class AnswerController extends Controller
{
    function addAnswer(Request $req) {
        $req->validate([
            'answer'=>'required|min:5',
        ]);

        $answer = new Answer;
        $answer->answer = $req->answer;
        $answer->q_id = $req->q_id;
        
        $save = $answer->save();

        if($save) {
            return redirect()->back()->with("success", "You have successfully added your answer");
        }else {
            return redirect()->back()->with("fail", "Something went wrong! Please try again");            
        }

        // $adata = DB::table('answers')
        // ->join('questions', 'answers.q_id', "=", 'questions.id')
        // ->where('answers.q_id', 'questions.id')->get();
        //  return view('dashboard.user.single-aq', ['adata'=>$adata]);
    }

    // function showAcademicAnswer() {
    //      $adata = DB::table('answers')
    //     ->join('questions', 'answers.q_id', "=", 'questions.id')
    //     ->where('answers.q_id', 'questions.id')->get();
    //      return view('dashboard.user.single-aq', ['adata'=>$adata]);
    // }

    public function showAcademicAnswer($id){
        $answer = Answer::join('questions', 'questions.id', '=', 'answers.q_id')
                    ->select('answers.answer',
                            'questions.Title',
                            'answers.q_id',
                            'questions.Description'
                    )  
                    ->where('q_id', '=', $id)
                    ->get();       
        return view("dashboard.user.single-aq", compact('answer'));
    }

    // public function getCountAnswer() {
    //     $answer = Answer::join('questions', 'questions.id', '=', 'answers.q_id')
    //                 ->select('answers.answer',
    //                         'questions.Title',
    //                         'answers.q_id',
    //                         'questions.Description'
    //                 )  
    //                 ->where('q_id', '=', $id)
    //                 ->get();       
    //     return view("dashboard.user.single-aq", compact('answer'));
    // }
}
