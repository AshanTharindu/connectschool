<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Captain;
use App\Chairperson;
use App\Chperson;
use App\ClassTeacher;
use App\Guardian;
use App\Student;
use App\SubjectTeacher;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{


//    returning the dashboard view
    public function getDashboard(){

        return view('dashboard');
    }

//    create student method
    public function studentPostSignUp(Request $request){

//        validation
        $this->validate($request,[
            'email' => 'required|email|unique:users',
            'first_name'=> 'required|max:120',
            'last_name'=> 'required|max:120',
            'password' => 'required|min:4'
        ]);


        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $class_name = $request['class_name'];
        $grade = $request['grade'];

        $user = new User();
        $user->email  = $email;
        $user->password = $password;
        $user->user_type = "student";
        $user->save();

        $student = new Student();
        $student->first_name = $first_name;
        $student->last_name = $last_name;
        $student->grade = $grade;
        $student->class_name = $class_name;
        $suser= User::where('email',$email)->first();
        $student->user_id=$suser->id ;
        $guardian = Guardian::where('id',$request['guardian_id'])->first();
        $guardian->students()->save($student);

        return redirect()->back();




        }

//    create admin method
    public function adminPostSignUp(Request $request){

        $this->validate($request,[
            'email' => 'required|email|unique:users',
            'first_name'=> 'required|max:120',
            'last_name'=> 'required|max:120',
            'password' => 'required|min:4'
        ]);

        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email  = $email;
        $user->password = $password;
        $user->user_type = "admin";
        $user->save();

        $admin = new Admin();
        $admin->first_name = $first_name;
        $admin->last_name = $last_name;
        $admin->save();


        return redirect()->back();

    }

//    create class teacher method
    public function classPostSignUp(Request $request){

        $this->validate($request,[
            'email' => 'required|email|unique:users',
            'first_name'=> 'required|max:120',
            'last_name'=> 'required|max:120',
            'class_name'=> 'required|max:3',
            'password' => 'required|min:4'
        ]);

        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $class_name = $request['class_name'];

        $user = new User();
        $user->email  = $email;
        $user->password = $password;
        $user->user_type = "class_teacher";
        $user->save();

        $class_teacher = new ClassTeacher();
        $class_teacher->first_name = $first_name;
        $class_teacher->last_name = $last_name;
        $class_teacher->class_name = $class_name;

        $class_teacher->save();


        return redirect()->back();

    }

    public function subjectPostSignUp(Request $request){

        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $subject_name = $request['subject_name'];

        $user = new User();
        $user->email  = $email;
        $user->password = $password;
        $user->user_type = "subject_teacher";
        $user->save();

        $subect_teacher = new SubjectTeacher();
        $subect_teacher->first_name = $first_name;
        $subect_teacher->last_name = $last_name;
        $subect_teacher->class_name = $subject_name;

        $subect_teacher->save();

        return redirect()->back();
    }

    public function parentPostSignUp(Request $request){
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $phone_number = $request['phone_number'];

        $user = new User();
        $user->email  = $email;
        $user->password = $password;
        $user->user_type = "parent";
        $user->save();

        $guradian = new Guardian();
        $guradian->first_name= $first_name;
        $guradian->last_name= $last_name;
        $guradian->phone_number= $phone_number;
        $guradian->save();

        return redirect()->back();
    }

    public function captainPostSignUp(Request $request){
        $student_id = $request['student_id'];
        $year = $request['year'];
        $sport = $request['sport'];
        $student = Student::where('id',$student_id)->first();
        $user_id =$student->user_id;
        $user = User::where('id',$user_id)->first();
         $user->user_type = "capatain";
         $user->save();

         $captain = new Captain();
         $captain->sport= $sport;
         $captain->user_id = $user->id;
         $captain->year = $year;
         $captain->save();

         return redirect()->back();

    }

    public function chpersonPostSignUp(Request $request)
    {
        $student_id = $request['student_id'];
        $year = $request['year'];
        $club = $request['club'];
        $student = Student::where('id',$student_id)->first();
        $user_id =$student->user_id;
        $user = User::where('id',$user_id)->first();
        $user->user_type = "chperson";
        $user->save();

        $chperson = new Chperson();
        $chperson->club= $club;
        $chperson->year= $year;
        $chperson->user_id = $user_id;
        $chperson->save();

        return redirect()->back();


    }

//    sign in method for users
    public function postSignIn(Request $request){
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $selected_val = $request['usertype'];


        if(Auth::attempt(['email'=> $request['email'],'password' => $request['password']])){
            return redirect()-> route('dashboard');


        }
        return redirect()->back();


    }

//    logout method for user

    public function getLogOut(){
        Auth::logout();

        return redirect()->route('welcome');
    }
}