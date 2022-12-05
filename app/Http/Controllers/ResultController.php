<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finalresult;

class ResultController extends Controller
{
    public function getALLResult()
    {
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
    }
}
