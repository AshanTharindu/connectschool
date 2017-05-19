<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    //
    public function sendMessages()
    {

        $user = User::all();

        return view('sendNote', ['users' => $user]);
    }

    public function postSendMessage(Request $request)
    {

        //find receive name
        $receiver = User::where('id', $request['receiver'])->first();
        $receiver_name = "";
        $receiverID = $receiver->id;
        $receiverType = $receiver->user_type;
        if ($receiverType == "admin") {
            $admin = \App\Admin::where('user_id', $receiverID)->first();
            $receiver_name = $admin->first_name . " " . $admin->last_name;
        } elseif ($receiverType == "parent") {
            $guardian = \App\Guardian::where('user_id', $receiverID)->first();
            $receiver_name = $guardian->first_name . " " . $guardian->last_name;
        } elseif ($receiverType == "student") {
            $student = \App\Student::where('user_id', $receiverID)->first();
            $receiver_name = $student->first_name . " " . $student->last_name;
        } elseif ($receiverType == "captain") {
            $student = \App\Student::where('user_id', $receiverID)->first();
            $receiver_name = $student->first_name . " " . $student->last_name;


        } elseif ($receiverType == "chperson") {
            $student = \App\Student::where('user_id', $receiverID)->first();
            $receiver_name = $student->first_name . " " . $student->last_name;

        } elseif ($receiverType == "class_teacher") {
            $classTeacher = \App\ClassTeacher::where('user_id', $receiverID)->first();
            $receiver_name = $classTeacher->first_name . " " . $classTeacher->last_name;


        } elseif ($receiverType == "subject_teacher") {
            $subjectTeacher = \App\SubjectTeacher::where('user_id', $receiverID)->first();
            $receiver_name = $subjectTeacher->first_name . " " . $subjectTeacher->last_name;

        }

        //find sender name
        $sender_name = "";
        $userID = Auth::user()->id;
        $userType = Auth::user()->user_type;
        if ($userType == "admin") {
            $admin = \App\Admin::where('user_id', $userID)->first();
            $sender_name = $admin->first_name . " " . $admin->last_name;
        } elseif ($userType == "parent") {
            $guardian = \App\Guardian::where('user_id', $userID)->first();
            $sender_name = $guardian->first_name . " " . $guardian->last_name;
        } elseif ($userType == "student") {
            $student = \App\Student::where('user_id', $userID)->first();
            $sender_name = $student->first_name . " " . $student->last_name;
        } elseif ($userType == "captain") {
            $student = \App\Student::where('user_id', $userID)->first();
            $sender_name = $student->first_name . " " . $student->last_name;
            $userType = "captain";

        } elseif ($userType == "chperson") {
            $student = \App\Student::where('user_id', $userID)->first();
            $sender_name = $student->first_name . " " . $student->last_name;

        } elseif ($userType == "class_teacher") {
            $classTeacher = \App\ClassTeacher::where('user_id', $userID)->first();
            $sender_name = $classTeacher->first_name . " " . $classTeacher->last_name;


        } elseif ($userType == "subject_teacher") {
            $subjectTeacher = \App\SubjectTeacher::where('user_id', $userID)->first();
            $sender_name = $subjectTeacher->first_name . " " . $subjectTeacher->last_name;

        }

        //send message
        $message = New Message();
        $message->body = $request['body'];
        $message->receiver_id = $request['receiver'];
        $message->subject = $request['subject'];
        $message->sender_name = $sender_name;
        $message->sender_type = $userType;
        $message->receiver_name = $receiver_name;
        $message->receiver_type = $receiverType;

        $user = User::where('id', $request->user()->id)->first();

        $user->messages()->save($message);

        return redirect()->back();


    }

    //view received notes
    public function getViewMessages(Request $request)
    {


        $user = User::where('id', $request->user()->id)->first();

        $message = Message::where('receiver_id', $user->id)->get();

        return view('viewNote', ['messages' => $message]);


    }


    //view sent messages
    public function getSendMessages(Request $request)
    {


        $user = User::where('id', $request->user()->id)->first();

        $message = Message::where('user_id', $user->id)->get();

        return view('sentnotes', ['messages' => $message]);


    }


}