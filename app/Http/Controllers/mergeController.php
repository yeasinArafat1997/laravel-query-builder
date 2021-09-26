<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mergeController extends Controller
{
   
    function merge(){

    $student = DB::table('student')->get();
    $markExam = DB::table('exam_marks')->get();
    $totalData = $student->merge($markExam);
    return $totalData;
    
    }
}
