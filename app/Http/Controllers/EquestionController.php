<?php

namespace App\Http\Controllers;
//use DB;

use App\Models\Equestion;
use App\Models\Exam;
use App\Models\Essayquestion;
use Illuminate\Http\Request;

use App\Models\Teacher;
use App\Models\Examanswer;
use App\Models\Stdattachment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Admin;

class EquestionController extends Controller
{
    public function addque(Request $request){

        $data = $request->input();

        $question = new Equestion;

        $question->question = $request->examQuestion;
        $question->option_a = $request->examQuestionOptionA;
        $question->option_b = $request->examQuestionOptionB;
        $question->option_c = $request->examQuestionOptionC;
        $question->option_d = $request->examQuestionOptionD;
        $question->correct_answer = $request->correctAnswer;
        $question->e_id = $request->e_ID;

        $question->save();
        return back()->with('message', 'The question was successfully added.');
    }


    function managequestion($e_id)
    {
        $manageexam = Exam::join('equestions', 'equestions.e_id', '=', 'exams.id')
                    ->get(['equestions.question', 
                            'equestions.option_a',
                             'equestions.option_b',
                             'equestions.option_c',
                             'equestions.option_d',
                             'equestions.correct_answer',
                             'equestions.e_id',
                             'equestions.id',
                              'exams.grade',
                              'exams.e_title'])
                    ->where('e_id', '=', $e_id);

                              return view("dashboard.teacher.manage-question",compact('manageexam'));                      

    }

    public function deleteQuestion($id){
        DB::table('equestions')->where('id',$id)->delete();
        return back()->with('message', 'The question was successfully deleted.');
    }

 /*   public function editQuestion($id){
        DB::table('equestions')->where('id',$id)->first();
        return view('edit-question', compact('managequestion'));
    }  */

    public function editQuestion($id){
        $data = DB::table('equestions')->where('id',$id)->first();
        return view('dashboard.teacher.edit-question', compact('data'));
    }

    public function updateQuestion(Request $request){

        DB::table('equestions')->where('id', $request->id)->update([
                    'question'=>$request->examQuestion,
                    'option_a'=>$request->examQuestionOptionA,
                    'option_b'=>$request->examQuestionOptionB,
                    'option_c'=>$request->examQuestionOptionC,
                    'option_d'=>$request->examQuestionOptionD,
                    'correct_answer'=>$request->correctAnswer,
        ]);
        //return back();
        //return view("manage-exam",compact('data'));
        session()->flash('message','The question was successfully updated.');
        return redirect()->to('/teacher/manage-exam');
    }

    function manageessayquestion($e_id)
    {
        $manageexam = Exam::join('essayquestions', 'essayquestions.e_id', '=', 'exams.id')
                    ->get(['essayquestions.question', 
                             'essayquestions.e_id',
                             'essayquestions.id',
                              'exams.grade',
                              'exams.duration',
                              'exams.e_title'])
                    ->where('e_id', '=', $e_id);

                              return view("dashboard.teacher.manage-essay-question",compact('manageexam'));                      

    }

    public function editEssayQuestion($id){
        $data = DB::table('essayquestions')->where('id',$id)->first();
        return view('dashboard.teacher.edit-essay-question', compact('data'));
    }

    public function updateEssayQuestion(Request $request){

        DB::table('essayquestions')->where('id', $request->id)->update([
                    'question'=>$request->examQuestion
        ]);
        //return back();
        //return view("manage-exam",compact('data'));
        return redirect()->to('/teacher/manage-essay-exam');
    }

    public function deleteEQuestion($id){
        DB::table('essayquestions')->where('id',$id)->delete();
        return back()->with('dashboard.teacher.deleteQuestion');
    }


/*    public function addanswer(Request $request){

        $data = $request->input();
        
        $answer = new Examanswer;

        $answer->e_id = $data['e_id'];
        $answer->q_id = $data['q_id'];
        $answer->std_answer = $data['radio'];
        $answer->std_id = $data['auth_id'];

        $answer->save();
        return back();
    }
*/

/*public function addanswer(Request $request){
    $q_id = $request->q_id;
    $e_id = $request->e_id;
    $auth_id = $request->auth_id;
    $radio = $request->radio;

    foreach($e_id as $key => $no){
        $input['q_id'] = $no;
        $input['e_id'];
        $input['auth_id'];
        $input['std_answer'] = $radio[$key];

        Examanswer::create($input);

    }*/

/*    public function addanswer(Request $request){

        $q_id       = $request->q_id;
        $e_id       = $request->e_id;
        $auth_id    = $request->auth_id;
        $std_answer = $request->std_answer;

        for($i=0; $i<count($q_id);$i++){

            $datasave = [
                'q_id'=>$q_id[$i],
                'e_id'=>$e_id[$i],
                'std_id'=>$auth_id[$i],
                'std_answer'=>$std_answer[$i],
                'created_at' => now()
            ];

            //return dd($datasave);

            DB::table('examanswers')->insert($datasave);
        }
    }*/

    public function addanswer(Request $request){

        $q_id       = $request->q_id;
        $e_id       = $request->e_id;
        $auth_id    = $request->auth_id;
        $std_answer = $request->std_answer;


        for($i=0; $i<count($q_id);$i++){

            $datasave = [
                'q_id'=>$q_id[$i],
                'e_id'=>$e_id[$i],
                'std_id'=>$auth_id[$i],
                'std_answer'=>$std_answer[$i],
                'created_at' => now()
            ];

            DB::table('examanswers')->insert($datasave);

            $ans = DB::table('equestions')
            ->select('equestions.correct_answer')
            ->where('id', '=', $q_id[$i]) 
            ->where('correct_answer', '=', $std_answer[$i])    
            ->first();

            if(!$ans){
                DB::table('examanswers')
                ->where('q_id', $q_id[$i])
                ->where('std_id', $auth_id[$i])
                ->update([
                    'mark' => 0,
                ]);
            } else {
                DB::table('examanswers')
                ->where('q_id', $q_id[$i])
                ->where('std_id', $auth_id[$i])
                ->update([
                    'mark' => 1,
                ]);
            }

        }
        return redirect()->to('/user/add-vedio')->with('message', "Your answers have been submitted successfully"); 
    }

}
