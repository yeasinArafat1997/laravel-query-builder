<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InsertController extends Controller
{
    function  insert()
    {
        $result = DB::table('student')->insert(['name' => 'Rupom', 'class' => '5', 'roll' => '4']);
        if ($result == true){
            return "success";
        }else{
            return "false";
        }
    }

    function  insertMulti()
    {
        $result = DB::table('student')->insert([

            ['name' => 'Rain', 'class' => '5', 'roll' => '9'],
            ['name' => 'Nuraz', 'class' => '1', 'roll' => '4'],
            ['name' => 'Saif', 'class' => '2', 'roll' => '7']

        ]);
        if ($result == true){
            return "success";
        }else{
            return "false";
        }
    }

}
