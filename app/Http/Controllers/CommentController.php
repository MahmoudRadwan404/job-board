<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Comment;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $date = Comment::all();
        return view('comment.index', ["comments" => $date]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    
        $comments=Comment::factory(6)->create();
        return response(["message"=>"succrssful","created"=>6,"comments"=>$comments],201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $comment = Comment::findOrFail($id);
        return view('comment.show', ["comment" => $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
