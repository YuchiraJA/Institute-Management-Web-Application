<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Financial_Payment;
use PDF;

class paymentcontroller extends Controller
{
    //
    function store(Request $request){
        //print_r($request->input());
         $payment = new Financial_Payment;
        
       
        $payment->student_id = $request->name1;
        $payment->class_id = $request->name2;
        $payment->month=$request->name3;
        $payment->amount=$request->name4;
        $payment->slip=$request->filename;
        $payment->save();
        return redirect()->to('admin.payment')->with('message','The salary was inserted successfully.');
    }
    






public function search(Request $request){
   $search = $request->get('search');
    // $data = Financial_Payment::where('student_id', 'like', '%'.$search.'%')->with('month')->get();
    $data = Financial_Payment::where('student_id', 'like', $search.'%')->paginate(100);
    return view('paymenttable', ['data' => $data]);
    }

    public function downloadPDF(){

        $data=Financial_Payment::all();

        $pdf=PDF::loadview('/paymentreport',compact('data'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('payment.pdf');
    }


    // public function downloadProgrseeReport($std_id)

    // {

    //     $student = Financial_Payment::
    //     ->select('student_id',
    //             'class_id',
    //             'month',
    //             'amount',
    //             )  

    //     ->where('id', '=', $id)

    //     ->get();
    //     $pdf = PDF::loadView('dashboard.user.std-progress-report-view',compact('student'))->setOptions(['defaultFont' => 'sans-serif']);
    //     return $pdf->download('MyReport.pdf');

    // }





    public function showData1($id)
    {
   
     $payment= Financial_payment::find($id);
     return view('/getPayment', compact('payment'));
    }
    
        
    

}

// {
//     function show(){
//         $data = Financial_Payment::all();
//         return view('paymenttable',['Financial_Payment'=> $data]);
//     }
    
//     }