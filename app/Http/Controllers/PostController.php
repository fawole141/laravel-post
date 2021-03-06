<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){
    	$posts = Post::with(['user','likes'])->paginate(2); //all post
    	return view('post.index',[
    		'posts' => $posts
    	]);
    }

    public function store(Request $request){

    	$this->validate($request,[
    		'body'=>'required'
    	]);

    auth()->user()->posts()->create([
'body'=>$request->body
    ]);

    return back();

    }
}
