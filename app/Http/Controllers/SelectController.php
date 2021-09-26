<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SelectController extends Controller
{
    function uniqueSelect(){
        $result = DB::table('student')->distinct()->get();
        return $result;
    }

    function singleColumnSelect(){
        $result = DB::table('student')->select('name')->get();
        return $result;
    }

    function MultiColumnSelect(){
        $result = DB::table('student')->select('name','id')->get();
        return $result;
    }
}
