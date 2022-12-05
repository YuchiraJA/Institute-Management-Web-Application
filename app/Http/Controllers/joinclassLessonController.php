<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

class joinclassLessonController extends Controller
{
    public function join()
    {
       return DB::table('lessons')
      ->join('eclasses','lessons.subject',"=",'eclasses.subject')
      ->get();
    }
}
