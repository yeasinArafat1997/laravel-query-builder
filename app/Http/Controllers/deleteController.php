<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deleteController extends Controller
{

    function onDelete(){
       $result = DB::table('student')->where('id','=','12')->delete();

       if ($result == true){
           return "Delete Success!";
       }else{
           return "Delete Failed!";
       }
    }

    function Delete(){
       $result = DB::table('student')->delete();

        if ($result == true){
            return "Delete Success!";
        }else{
            return "Delete Failed!";
        }
    }

    function Truncate(){
        $result = DB::table('student')->truncate();

        if ($result == true){
            return "Delete Success!";
        }else{
            return "Delete Failed!";
        }
    }


}
