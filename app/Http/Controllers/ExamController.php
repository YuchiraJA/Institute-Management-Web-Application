<?php

namespace App\Http\Controllers;
use DB;
use PDF;
use App\Models\Exam;
use App\Models\Equestion;
use App\Models\Essayquestion;
use App\Models\Eclass;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Examanswer;
use App\Models\User;
use App\Models\Finalresult;
use App\Models\Essayqanswer;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Admin;


class ExamController extends Controller
{
    public function store(Request $request) {

        $request->validate([
            'examSubject' => 'required',
            'examGrade' => 'required',
            'examtype' => 'required',
            'examTitle' => 'required|min:8',
            'examDate' => 'required',
            'examTime' => 'required',
            'examDuration' => 'required',
            'examNoOfQuestions' => 'required|numeric',
            'examEnrollmentKey' => 'required|min:6',
        ]);

        $exam = new Exam; 
        $exam->subject=$request->examSubject;
        $exam->grade=$request->examGrade;
        $exam->e_type=$request->examtype;
        $exam->e_title=$request->examTitle;
        $exam->e_date=$request->examDate;
        $exam->e_time=$request->examTime;
        $exam->duration=$request->examDuration;
        $exam->no_of_questions=$request->examNoOfQuestions;
        $exam->e_key=$request->examEnrollmentKey;
        $exam->save(); 

        $data=Eclass::all();
        return back()->with('msg', 'The exam was successfully added.');
    }


    public function manageExam(Request $request) {

        $data=Exam::all()->where('e_type','MCQ');
        return view('dashboard.teacher.manage-exam')->with('manageexam',$data);
    }

    public function manageEssayExam(Request $request) {

        $data=Exam::all()->where('e_type','Eassy');
        return view('manage-essay-exam')->with('manageexam',$data);
         
    }

        public function addQuestions($id){
            $manageexam = DB::table('exams')->where('id',$id)->first();
            return view("dashboard.teacher.add-question",compact('manageexam'));
        }

        public function addEssayQuestion($id){
            $manageexam = DB::table('exams')->where('id',$id)->first();
            return view("dashboard.teacher.add-essay-question",compact('manageexam'));
        }

        public function deleteExam($id){
            DB::table('exams')->where('id',$id)->delete();
            return back()->with('deleteExam')->with('message', 'The exam was successfully deleted.');
        }

        public function editExam($id){
            $manageexam = DB::table('exams')->where('id',$id)->first();
            return view('dashboard.teacher.edit-exam', compact('manageexam'));
        }

        public function updateExam(Request $request){

            $request->validate([
                'examSubject' => 'required',
                'examGrade' => 'required',
                'examtype' => 'required',
                'examTitle' => 'required|min:8',
                'examDate' => 'required',
                'examTime' => 'required',
                'examDuration' => 'required',
                'examNoOfQuestions' => 'required|numeric',
                'examEnrollmentKey' => 'required|min:6',
            ]);

            DB::table('exams')->where('id', $request->id)->update([
                'subject'=>$request->examSubject,
                'grade'=>$request->examGrade,
                'e_title'=>$request->examTitle,
                'duration'=>$request->examDuration,
                'e_date'=>$request->examDate,
                'e_time'=>$request->examTime,
                'no_of_questions'=>$request->examNoOfQuestions,
                'e_key'=>$request->examEnrollmentKey,
            ]);
            return redirect()->to('/teacher/manage-exam')->with('message', 'The exam was successfully updated.');
        }

        public function viewExam(Request $request) {
            $data=Exam::all()->where('e_type', '=', 'MCQ');
            return view('view-exam')->with('viewExam',$data);
        }

        public function viewEssayExam(Request $request) {
            $data=Exam::all()->where('e_type', '=', 'Essay');
            return view('view-essay-exam')->with('viewEssayExam',$data);
        }

        /*public function getExam($id){
            $launchExam = DB::table('exams')->where('id',$id)->first();
            return view("view-question",compact('launchExam'));
        } */

        /*function getExam($id){
            $launchExam = Equestion::join('exams','exams.id', '=', 'equestions.e_id')
                            ->get([
                                
                                'equestions.question',
                                'equestions.option_a',
                                'equestions.option_b',
                                'equestions.option_c',
                                'equestions.option_d'])
                            ->where('id', '=', $id);
                                return view("view-question",compact('launchExam'));
        }*/

        /*public function getExam($e_id){
            $launchExam = Equestion::all()->where('e_id', '=', $e_id);
            return view("view-question",compact('launchExam'));
        }*/

        /*public function getExam($e_id){
            $launchExam = DB::table('equestions')
            ->where('e_id', '=', $e_id)
            ->inRandomOrder()
            ->limit('exams.no_of_questions')
            ->get();
            return view("view-question",compact('launchExam'));
        }*/


        /*function getExam($e_id)
        {
            $launchExam = Exam::join('equestions', 'equestions.e_id', '=', 'exams.id')
                        ->get(['equestions.question', 
                                'equestions.option_a',
                                 'equestions.option_b',
                                 'equestions.option_c',
                                 'equestions.option_d',
                                 'equestions.e_id',
                                 'equestions.id',
                                  'exams.id',
                                  'exams.e_title',
                                  'exams.no_of_questions'])
                        ->where('e_id', '=', $e_id);
                        //->inRandomOrder()
                        //->limit('exams.no_of_questions')
                        //->get();
    
                                  return view("view-question",compact('launchExam'));                      
    
        }*/
        public function getExam($e_id){
            $no = DB::table('equestions')
                        ->join('exams', 'equestions.e_id', '=', 'exams.id')            
                        ->select('exams.no_of_questions')
                        ->where('e_id', '=', $e_id)
                        ->pluck('no_of_questions')   
                        ->first(); 

            $launchExam = DB::table('equestions')
                        ->join('exams', 'equestions.e_id', '=', 'exams.id')
                        ->select('equestions.question', 
                                'equestions.option_a', 
                                'equestions.option_b',
                                'equestions.option_c',
                                'equestions.option_d',
                                'equestions.e_id',
                                'equestions.id',
                                'exams.e_title',
                                'exams.no_of_questions')
                        ->where('e_id', '=', $e_id)        
                        ->inRandomOrder()    
                        ->limit($no) 
                        ->get();

                //dd($no,$launchExam);
                return view("dashboard.user.view-question",compact('launchExam'));
        }

        public function getEssayExam($e_id){
            $no = DB::table('essayquestions')
                        ->join('exams', 'essayquestions.e_id', '=', 'exams.id')            
                        ->select('exams.no_of_questions')
                        ->where('e_id', '=', $e_id)
                        ->pluck('no_of_questions')   
                        ->first(); 

            $launchExam = DB::table('essayquestions')
                        ->join('exams', 'essayquestions.e_id', '=', 'exams.id')
                        ->select('essayquestions.question', 
                                'essayquestions.e_id',
                                'essayquestions.id',
                                'exams.e_title',
                                'exams.no_of_questions')
                        ->where('e_id', '=', $e_id)        
                        ->inRandomOrder()    
                        ->limit($no) 
                        ->get();

                //dd($no,$launchExam);
                return view("dashboard.user.view-essay-question",compact('launchExam'));
        }


        /*public function checkEkey(Request $request){
            if(DB::table('exams')->where('e_key', $request->input('enrollmentKey'))->get()){
                return view("view-question");
            }*/

        /*public function checkEkey(Request $request){
            if(DB::select("select * from exams where e_key->($request->input('enrollmentKey'))")){
                return view("view-question");
            }
        }*/

        /*public function checkEkey(Request $request){
            $eKey = DB::table('exams')->where('e_key', '=', $request->input('enrollmentKey'));
            if ($eKey = true){
                return view("view-question");
            }
            else{
                return back();
            }
        }*/
       

        public function checkEkey(Request $request){
            $eKey = Exam::where('e_key', '=', $request->enrollmentKey)->first();
            if(!$eKey){
                return back()->with('fail', 'The enrollment key is incorrect');
            }else{
                return redirect('/user/view-exam');
            }
        }

        public function checkEssayQEkey(Request $request){
            $eKey = Exam::where('e_key', '=', $request->enrollmentKey)->first();
            if(!$eKey){
                return back()->with('fail', 'The enrollment key is incorrect');
            }else{
                return redirect('/user/view-essay-exam');
            }
        }

/*        public function checkEkey(Request $request){
            $eKey = Exam::where('e_key', '=', $request->enrollmentKey)->first();
            if(!$eKey){
                return back()->with('fail', 'The enrollment key is incorrect');
            }else{
                $eID = Exam::where('id', '=', $request->exam_id)->first();
                if(!$eID){
                    //return redirect('view-question');
                    return back();
                }else{
                    return redirect('view-question');
                    //return back();
                }
            }
        }  */


        /*public function checkEkey(Request $request){
            $eKey = DB::table('exams')
                ->where('e_key', '=', $request->enrollmentKey, 'AND', 'id', '=', $request->exam_id);
                if(!$eKey){
                    return back()->with('fail', 'The enrollment key is incorrect');
                } else {
                    return view("view-question");
                }    
        }*/

/*        public function checkEkey(Request $request){
            if($eKey = DB::table('exams')
                    ->where('e_key', '=', $request->input('enrollmentKey'))){
                        return view("view-question");
                    }     
        }       */


/*        $users = DB::table('users')
                ->where('votes', '=', 100)
                ->where('age', '>', 35)
                ->get();*/

            //$eKey = Exam::where('e_key',$request->input('enrollmentKey'))->get();
            //return view("add-eKey",compact('eKey'));

            public function addessayque(Request $request){

                $question = new Essayquestion;

                $question->question = $request->examQuestion;
                $question->e_id = $request->e_ID;
        
                $question->save();
                return back();
            }

            public function search(Request $request){
                $search = $request->get('search');
                $exams = DB::table('exams')
                ->where('e_title', 'LIKE', '%'.$search.'%')
                ->where('e_type','MCQ')
                ->get();
                return view('dashboard.teacher.mcq-exam-search')->with('manageexam',$exams);
            }

            public function searchEssayExam(Request $request){
                $search = $request->get('search');
                $exams = DB::table('exams')
                ->where('e_title', 'LIKE', '%'.$search.'%')
                ->where('e_type','Essay')
                ->get();
                return view('dashboard.teacher.essay-exam-search')->with('manageexam',$exams);
            }


            public function manageExamResults(Request $request) {

                $data=Exam::all()->where('e_type','MCQ');;
                return view('dashboard.teacher.approve-result')->with('manageexam',$data);
            }


            public function manageEssayQAnswers(Request $request) {

                $data=Exam::all()->where('e_type','Essay');;
                return view('dashboard.teacher.manage-essayq-marks')->with('manageexam',$data);
            }


            public function manageResult($e_id)
            {
                $student = Exam::join('examanswers', 'examanswers.e_id', '=', 'exams.id')
                            ->join('users', 'users.id', '=', 'examanswers.std_id')
                            ->select('users.first_name', 
                                    'users.last_name', 
                                    'examanswers.std_id',
                                    'examanswers.e_id',
                                    DB::raw('SUM(examanswers.mark) as sum'),
                                )
                            ->groupBy('examanswers.std_id','examanswers.e_id')    
                            ->where('e_id', '=', $e_id)
                            ->get();
        
                return view("dashboard.teacher.manage-results",compact('student'));                      
        
            }

            public function manageEssayQResult($e_id)
            {
                $student = Exam::join('essayqanswers', 'essayqanswers.e_id', '=', 'exams.id')
                            ->join('users', 'users.id', '=', 'essayqanswers.std_id')
                            ->select('users.first_name', 
                                    'users.last_name', 
                                    'essayqanswers.std_id',
                                    'essayqanswers.q_id',
                                    'essayqanswers.std_answer'
                                )
                            ->where('e_id', '=', $e_id)
                            ->get();
        
                return view("dashboard.teacher.manage-essay-results",compact('student'));                      
        
            }


            public function viewStdAnswer($std_id,$e_id)
            {
                $student = Examanswer::join('equestions', 'equestions.id', '=', 'examanswers.q_id')
                            ->select('equestions.question', 
                                    'equestions.option_a',
                                    'equestions.option_b',
                                    'equestions.option_c',
                                    'equestions.option_d',
                                    'equestions.correct_answer',
                                    'examanswers.std_answer',
                                    'examanswers.mark'
                                )   
                            ->where('std_id', '=', $std_id)
                            ->where('equestions.e_id', '=', $e_id)
                            ->get();
        
                return view("dashboard.teacher.view-std-answers",compact('student'));                      

            }

            public function viewStdEssayAnswer($std_id)
            {
                $student = Essayqanswer::join('essayquestions', 'essayquestions.id', '=', 'essayqanswers.q_id')
                            ->select('essayquestions.question', 
                                    'essayquestions.id',
                                    'essayquestions.e_id',
                                    'essayqanswers.std_id',
                                    'essayqanswers.std_answer',
                                )   
                            ->where('std_id', '=', $std_id)
                            ->get();
        
                return view("dashboard.teacher.view-std-essay-answers",compact('student'));                      
        
            }

            public function approveStdAnswer($std_id)
            {
                $student = Examanswer::join('users', 'users.id', '=', 'examanswers.std_id')
                            ->select('users.first_name', 
                                    'users.last_name', 
                                    'examanswers.std_id',
                                    'examanswers.e_id',
                                    DB::raw('SUM(examanswers.mark) as sum'),
                                )
                            ->groupBy('examanswers.std_id','examanswers.e_id')    
                            ->where('examanswers.std_id', '=', $std_id)
                            ->get();
        
                return view("dashboard.teacher.std-approve-results",compact('student'));                      
        
            }

            public function approvedMarks(Request $request) {

                $result = new Finalresult; 
                $result->std_id=$request->std_id;
                $result->e_id=$request->e_id;
                $result->marks=$request->std_marks;
                $result->feedback=$request->t_feedback;
                $result->t_id=$request->t_id;
                $result->save(); 
                return redirect()->to('/teacher/approve-result')->with('message', "Student's result was approved");
            }

            
            public function essayanswer(Request $request) {

                $result = new Essayqanswer; 
                $result->e_id=$request->e_id;
                $result->q_id=$request->q_id;
                $result->std_id=$request->std_id;
                $result->std_answer=$request->std_answer;
                $result->save(); 
                return redirect()->to('/user/add-vedio')->with('message', "Your answers have been submitted successfully");
            }
            
            public function approvedEssayQMarks(Request $request) {

                $result = new Finalresult; 
                $result->std_id=$request->std_id;
                $result->e_id=$request->e_id;
                $result->marks=$request->std_marks;
                $result->feedback=$request->t_feedback;
                $result->t_id=$request->t_id;
                $result->save(); 
                return redirect()->to('/teacher/manage-essayq-marks')->with('message', "Student's marks was added");
            }

            public function finalResult($std_id)
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
        
                return view("dashboard.user.std-progress-report-view",compact('student'));                      
        
            }

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
                
                $pdf = PDF::loadView('dashboard.user.std-progress-report-pdf',compact('student'))->setOptions(['defaultFont' => 'sans-serif']);
                return $pdf->download('MyReport.pdf');
            }

            public function myExam($std_id)
            {
                $student = Finalresult::join('exams', 'exams.id', '=', 'finalresults.e_id')
                            ->select('exams.e_title', 
                                    'exams.subject', 
                                    'exams.e_type',
                                    'finalresults.marks',
                                    'finalresults.e_id',
                                )   
                            ->where('finalresults.std_id', '=', $std_id)
                            ->where('exams.e_type', '=', 'MCQ')
                            ->get();
        
                return view("dashboard.user.my-exam",compact('student'));                      
        
            }

            public function myAnswers($std_id,$e_id)
            {
                $student = Examanswer::join('equestions', 'equestions.id', '=', 'examanswers.q_id')
                            ->select('equestions.question', 
                                    'equestions.option_a',
                                    'equestions.option_b',
                                    'equestions.option_c',
                                    'equestions.option_d',
                                    'equestions.correct_answer',
                                    'examanswers.std_answer',
                                    'examanswers.mark',
                                    'equestions.e_id',
                                )   
                            ->where('std_id', '=', $std_id)
                            ->where('examanswers.e_id', '=', $e_id) 
                            ->get();
        
                return view("dashboard.user.view-my-answers",compact('student'));                      

            }

            public function downloadAnswerSheet($std_id, $e_id)
            {
                $student = Examanswer::join('equestions', 'equestions.id', '=', 'examanswers.q_id')
                            ->select('equestions.question', 
                                    'equestions.option_a',
                                    'equestions.option_b',
                                    'equestions.option_c',
                                    'equestions.option_d',
                                    'equestions.correct_answer',
                                    'examanswers.std_answer',
                                    'examanswers.mark',
                                    'equestions.e_id',
                                )   
                            ->where('std_id', '=', $std_id)
                            ->where('examanswers.e_id', '=', $e_id) 
                            ->get();
                
                $pdf = PDF::loadView('dashboard.user.view-my-answer-pdf',compact('student'))->setOptions(['defaultFont' => 'sans-serif']);
                return $pdf->download('MyAnswers.pdf');
            }
}
