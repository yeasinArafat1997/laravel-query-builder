<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AggregatesController extends Controller
{
    function minRow(){
        $result = DB::table('student')->min('roll');
        return $result;
    }

    function maxRow(){
        $result = DB::table('student')->max('roll');
        return $result;
    }

    function countRow(){
        $result = DB::table('student')->count('roll');
        return $result;
    }
}
