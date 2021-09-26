<?php

use Illuminate\Support\Facades\Route;



//Route::get('/', 'App\Http\Controllers\RetriveController@selectAllRows');
//Route::get('/', 'App\Http\Controllers\RetriveController@selectOneRows');
//Route::get('/', 'App\Http\Controllers\RetriveController@findRow');
//Route::get('/', 'App\Http\Controllers\RetriveController@findOneColumn');
//Route::get('/', 'App\Http\Controllers\RetriveController@findMultiColumn');
//Route::get('/', 'App\Http\Controllers\RetriveController@specificData');

//Route::get('/agg', 'App\Http\Controllers\AggregatesController@minRow');
//Route::get('/agg', 'App\Http\Controllers\AggregatesController@maxRow');
//Route::get('/agg', 'App\Http\Controllers\AggregatesController@countRow');

//Route::get('/select', 'App\Http\Controllers\SelectController@uniqueSelect');
//Route::get('/select', 'App\Http\Controllers\SelectController@singleColumnSelect');
//Route::get('/select', 'App\Http\Controllers\SelectController@MultiColumnSelect');

//Route::get('/merge', 'App\Http\Controllers\mergeController@merge');


//Route::get('/join', 'App\Http\Controllers\joinController@leftJoin');
//Route::get('/insert', 'App\Http\Controllers\InsertController@insert');
//Route::get('/insert', 'App\Http\Controllers\InsertController@insertMulti');

//Route::get('/delete', 'App\Http\Controllers\deleteController@onDelete');

//Route::get('/delete', 'App\Http\Controllers\deleteController@Delete');
//Route::get('/delete', 'App\Http\Controllers\deleteController@Truncate');

Route::get('/update', 'App\Http\Controllers\updateController@onUpdate');


















