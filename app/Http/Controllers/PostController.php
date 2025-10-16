<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index()
    {
        $limit=3;
        $page=2;
        $skip=($page-1)*$limit;
        $date =  Post::skip($skip)->take($limit)->get();
        return view('post.index', ["posts" => $date]);
    }
    function show($id)
    {

        $post = Post::findOrFail($id);
        return view('post.show', ["post" => $post]);
    }
    function create()
    {
        // Post::create([
        //     "title" => "my secounddddd post",
        //     "body" => "mt body",
        //     "published" => true,
        //     "author" => "mahmoud",
        // ]);
        Post::factory(100)->create();
        return redirect('/blog');
    }
    function delete(){
        Post::destroy(2);
    }
}
