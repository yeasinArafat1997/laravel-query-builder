<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class updateController extends Controller
{
    function onUpdate()
    {
        $result = DB::table('student')
            ->where('id','=','1')
            ->update(['name'=>'Arafat12','class'=>'6','roll'=>'12']);

        if ($result == true){
            return "Update Success!";
        }else{
            return "Update Failed!";
        }
    }
}
