<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LibraryHome;


// use App\Http\Controller\DB; 
 

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Librarian;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
use Carbon;

class LibraryHomeController extends Controller
{
    public function count(){
        $LibraryHome = new LibraryHome();
        $LibraryHome->count();
    }

    
    public function countView(){
        //DB::connection('main')->count("select COUNT(id) from library_item");
        $libraryitem1 = DB::table('libraryitems')->where('Item_type','Journal')->count();
        $libraryitem2 = DB::table('libraryitems')->where('Item_type','Educational PDF')->count();
        $libraryitem3 = DB::table('libraryitems')->where('Item_type','E-books')->count();
        $libraryitem4 = DB::table('libraryitems')->where('Item_type','Other')->count();
        $libraryitem5 = DB::table('papers')->where('Paper_type','Past Paper')->count();
        $libraryitem6 = DB::table('papers')->where('Paper_type','Model Paper')->count();
        $libraryitem7 = DB::table('materials')->count();
        $feedback1 = DB::table('feedback')->where('Feed_type','Positive')->count();
        $feedback2 = DB::table('feedback')->where('Feed_type','Negative')->count();
        $feedback3 = DB::table('feedback')->where('Feed_type','Neutral')->count();
        $w=100;
        

        return view('dashboard.librarian.libraryHome',compact('libraryitem1','libraryitem2','libraryitem3','libraryitem4','libraryitem5','libraryitem6','libraryitem7','feedback1','feedback2','feedback3','w'));
        return view('dashboard.user.libraryHome',compact('libraryitem1','libraryitem2','libraryitem3','libraryitem4','libraryitem5','libraryitem6','libraryitem7','feedback1','feedback2','feedback3','w'));
    }


    public function downloadPDF2(){

        //data retriving using 'dd' cmd
    
        //dd($data);

        $libraryitem1 = DB::table('libraryitems')->where('Item_type','Journal')->count();
        $libraryitem2 = DB::table('libraryitems')->where('Item_type','Educational PDF')->count();
        $libraryitem3 = DB::table('libraryitems')->where('Item_type','E-books')->count();
        $libraryitem4 = DB::table('libraryitems')->where('Item_type','Other')->count();
        $libraryitem5 = DB::table('papers')->where('Paper_type','Past Paper')->count();
        $libraryitem6 = DB::table('papers')->where('Paper_type','Model Paper')->count();
        $libraryitem7 = DB::table('materials')->count();
        $feedback1 = DB::table('feedback')->where('Feed_type','Positive')->count();
        $feedback2 = DB::table('feedback')->where('Feed_type','Negative')->count();
        $feedback3 = DB::table('feedback')->where('Feed_type','Neutral')->count();
        $w=100;
        $mytime = Carbon\Carbon::now();

        $pdf = PDF::loadView('dashboard.librarian.libraryhomereport1',compact('libraryitem1','libraryitem2','libraryitem3','libraryitem4','libraryitem5','libraryitem6','libraryitem7','feedback1','feedback2','feedback3','w','mytime'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download("Libraryhome.pdf");



    
        //$pdf = PDF::loadView('dashboard.librarian.manage_libraryitems')->with('libraryitems',$data);
        //return view('dashboard.librarian.manage_libraryitems')->with('libraryitems',$data);
      //  $pdf = PDF::loadView('dashboard.librarian.libraryHome',compact('libraryitem1','libraryitem2'));
      //  return $pdf->download("Libraryhome.pdf");
    
    }


  
}
