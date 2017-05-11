<?php

namespace App\Http\Controllers;

use App\MarkSheet;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarksController extends Controller
{

    public function postSaveMarks(Request $request){

        for($i=0; $i<20; $i=$i+4){
            $marksheet = new MarkSheet();
            $marksheet->subject= $request['subject'];
            $marksheet->term= $request['term'];
            $marksheet->year= $request['year'];
            $marksheet->grade= $request['grade'];
            $marksheet->class_name= $request['classname'];
            $marksheet->marks= $request[$i+1];
            $marksheet->rank= $request[$i+3];

            $student = \App\Student::where('id',$request[$i])->first();

            $student->marksheets()->save($marksheet);


        }
        return redirect()->back();



    }

    public function getViewMarks(Request $request){
        $grade = $request['grade'];
        $term = $request['term'];
        $student = Student::where('user_id',$request->user()->id)->first();

        $marksheet = DB::select('select * from mark_sheets where student_id = ?', [$student->id]);
        /*$marksheet = MarkSheet::where('student_id',3)->get()   ;*/
        return view('marksView',['marksheets' => $marksheet]);


    }
    public function postFetchMarks(Request $request){
        $grade = $request['grade'];
        $term = $request['term'];
        $student = Student::where('user_id',$request->user()->id)->first();

        $marksheet = DB::select('select * from mark_sheets where student_id = ? AND grade = ? AND term = ?',[$student->id,$grade,$term]);
        return view('marksView',['marksheets' => $marksheet]);


    }


}