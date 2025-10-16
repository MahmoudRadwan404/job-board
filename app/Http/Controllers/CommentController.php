<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    function index()
    {
        $date = Comment::all();
        return view('comment.index', ["comments" => $date]);
    }
    function show($id)
    {

        $comment = Comment::findOrFail($id);
        return view('comment.show', ["comment" => $comment]);
    }
    function create()
    {
        // Comment::create([
        //     "post_id" => 3,
        //     "content" => "testing comment",
        //     "author" => "mahmoud",
        // ]);
        Comment::factory(6)->create();
        return redirect('/comments');
    }
}
