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
        $user->user_type = "student";
        $user->save();

        $student = new Student();
        $student->first_name = $first_name;
        $student->last_name = $last_name;
        $student->class_name = $class_name;
        $student->parent_id= 1;

        $student->save();


        return redirect()->route('dashboard');




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


        return redirect()->route('dashboard');

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


        return redirect()->route('dashboard');

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

        return redirect()->route('dashboard');
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
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $sport = $request['sport'];

        $user = new User();
        $user->email  = $email;
        $user->password = $password;
        $user->user_type = "capatain";
        $user->save();

        $captain = new Captain();
        $captain->first_name= $first_name;
        $captain->last_name= $last_name;
        $captain->email  = $email;
        $captain->password = $password;
        $captain->sport= $sport;
        $captain->save();

        return redirect()->back();

    }

    public function chpersonPostSignUp(Request $request)
    {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $club = $request['club'];

        $user = new User();
        $user->email = $email;
        $user->password = $password;
        $user->user_type = "chperson";
        $user->save();

        $cperson = new Chperson();
        $cperson->first_name= $first_name;
        $cperson->last_name= $last_name;
        $cperson->email  = $email;
        $cperson->password = $password;
        $cperson->club= $club;
        $cperson->save();

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