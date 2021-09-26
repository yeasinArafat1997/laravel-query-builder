<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joinController extends Controller
{

   
   function leftJoin(){
   $result =  DB::table('student')->leftjoin('exam_marks','student.roll','=','exam_marks.roll')->get();
   return $result;
   }
}
