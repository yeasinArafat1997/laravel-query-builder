<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RetriveController extends Controller
{
    function selectAllRows(){
        $result = DB::table('student')->get();
        return json_encode($result);
    }

    function selectOneRows(){
        $result = DB::table('student')->where('name','=','Arafat')->first();
        return json_encode($result);
    }

    function findRow(){
        $result = DB::table('student')->find(7);
        return json_encode($result);
    }

    function findMultiColumn(){
        $result = DB::table('student')->pluck('name','roll');
        return json_encode($result);
    }

    function specificData(){
        $result = DB::table('student')->where('id','=','6')->value('name');
        return json_encode($result);
    }
}
