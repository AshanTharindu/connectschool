<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\User;

class MessageController extends Controller{

    public function getMessages(){

        $user = User::all();

        return view('messages',['users' => $user]);
    }

    public function postSendMessage(Request $request){
        $message = New Message();
        $message->body = $request['message'];
        $message->receiver_id = $request['receiver'];

        $user = User::where('id',$request->user()->id)->first();

        $user->messages()->save($message);

    }

}