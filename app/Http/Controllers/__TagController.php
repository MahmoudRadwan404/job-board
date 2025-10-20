<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    function index()
    {
        $date = Tag::all();
        return view('tags.index', ["tags" => $date]);
    }
    function show($id)
    {

        $post = Tag::findOrFail($id);
        return view('tag.show', ["tag" => $post]);
    }
    function create()
    {
        Tag::create([
            "title" => "software engineering",

        ]);
        return redirect('/tags');
    }
    function testManytoMany()
    {
        $post1 = Post::find(3);
        $post2 = Post::find(4);
        //$post1->tags()->attach([1, 2]);
        $post2->tags()->attach([2]);
        return response()->json([
            'post1' => $post1->tags,
            'post2' => $post2->tags,

        ]);
    }
    function reverse(){
        $tag=Tag::find(1);
        return response()->json([
            'title'=>$tag->title,
            'posts'=>$tag->posts
        ]);
    }
}
