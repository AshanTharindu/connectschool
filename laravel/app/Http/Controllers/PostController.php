<?php

namespace App\Http\Controllers;

use App\Post;
use App\ClubPost;
use Illuminate\Http\Request;

class PostController extends Controller{

    public function postCreatePost(Request $request){

        $post = new Post();
        $post->body = $request['body'];
        $captain = Captain::where('user_id',$request->user()->id)->first();

        $captain->posts()->save($post);

        return redirect()->back();

    }
    public function postCreateClubPost(Request $request){

        $cpost = new ClubPost();
        $cpost->body = $request['body'];
        $chperson = \App\Chperson::where('user_id',$request->user()->id)->first();
        $chperson->posts()->save($cpost);
        return redirect()->back();

    }

    public function show(){

        $post = Post::all();
        return view('sport',['posts' => $post]);

    }

    public function showc(){

        $post = ClubPost::all();
        return view('clubs',['posts' => $post]);

    }
}

