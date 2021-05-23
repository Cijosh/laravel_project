<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class PostController extends Controller
{
    public function index(){

        $posts = Post::all();
        return view('posts',[
            'posts' => $posts,
            'sds' => '56'
        ]);
    }

    public function show($id){
        //$post_id = request('id');
        $posts = Post::where('id',$id)->first();
       // dd($posts);
        $comments = Comment::where('post_id',$id)->get();
            return view('posts_with_comment',[
                'posts' =>  $posts,
                'comments' => $comments
            ]);
    }
}
