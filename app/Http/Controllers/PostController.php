<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $limit=3;
        $page=2;
        $skip=($page-1)*$limit;
        $date =  Post::skip($skip)->take($limit)->get();
        return view('post.index', ["posts" => $date]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //@TODO
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $post = Post::findOrFail($id);
        return view('post.show', ["post" => $post]);
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
