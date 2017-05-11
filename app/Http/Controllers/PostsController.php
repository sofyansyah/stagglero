<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use App\Http\Requests;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::join('users', 'posts.user_id', '=', 'users.id')->select('posts.*','users.username')->get();
        return view ('posts.feeds', compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
     // $community = new Community;
     // $community->user_id = Auth::user()->id;
     // $community->title= $request->title;
     // $community->description= $request->description;
     // $community->tags= $request->tags; 
     // $community->location= $request->location; 
     // $community->image= $request->image;
     // $community->featured= $request->featured;  
     // $community->save();
        Post::create ($request->all());
        // Community::create ([
        //     'user_id' =>Auth::user()->id,
        //     'title'=> $request->title,
        //     'description'=> $request->description,
        //     'tags'=> $request->tags,
        //     'image'=> $request->image,
        //     'location' => $request->location,
        //     'featured' => $request->featured,
        //     ]);
       return redirect ('/posts');
    }
    public function show($id)
    {
        $post = Post::join('users', 'posts.user_id', '=', 'users.id')->where('posts.id', $id)->select('posts.*','users.username')->first();
        return view('posts.show', compact ('post'));
    }
    public function edit($id)
    {
     $post = Post::join('users', 'posts.user_id', '=', 'users.id')->where('posts.id', $id)->select('posts.*','users.username')->first();
        return view('posts.edit', compact ('post'));
    }
    public function update(Request $request, $id)
    {
         $post = Post::join('users', 'posts.user_id', '=', 'users.id')->where('posts.id', $id)->select('posts.*','users.username')->first();
        return redirect ('/posts');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
          $post = Post::join('users', 'posts.user_id', '=', 'users.id')->where('posts.id', $id)->select('posts.*','users.username')->first();
         $post->delete();
         return redirect ('/posts');
    }
}
}
