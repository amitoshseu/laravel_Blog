<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(){
        $posts = Post::latest()->get();
    	return view('posts.index', compact('posts'));
    }

    public function show($id){
        $post = Post::find($id);

    	return view('posts.show', compact('post'));
    }
 
    public function create(){
    	return view('posts.create');
    }

    public function store(){

    	/**
    	//Create a new post using the request data
   
    	$post = new Post;

    	$post->title = request('title');

    	$post->body = request('body');

		//Save it to the database

    	$post->save();

		*/

        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
            ]);


        auth()->user()->publish(
            new Post(request(['title','body']))
            );


    	return redirect('/');
    }
}
