<?php

namespace App\Http\Controllers;

use App\MarkSheet;
use App\Student;
use Illuminate\Http\Request;

class MarksController extends Controller
{

public function postSaveMarks(Request $request){

    $marksheet = new MarkSheet();
    $marksheet->subject= $request['subject'];
    $marksheet->term= $request['term'];
    $marksheet->year= $request['year'];
    $marksheet->class_name= $request['classname'];
    $marksheet->marks= $request['1'];
    $marksheet->rank= $request['3'];

    $student = \App\Student::where('id',$request['0'])->first();

    $marksheet->save();
    return redirect()->back();

}


}