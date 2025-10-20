<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $data =  Post::paginate(5);
        return response(["posts" => $data,"message"=>"post created successfully","status"=>200]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $date = Post::create($request->all());
        return response($date, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Post::find($id);
        if(!$data){
          return  response(["messege"=>"post not found"]);
        }
        return response(["post" => $data], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = Post::find($id);
        if(!$data){
           return response(["messege"=>"post not found"]);
        }
        $data->update($request->all());
        return response($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Post::find($id);
        if(!$data){
            return  response(["messege"=>"post not found"]);
          }
        $data->delete();
        return response(204);
    }
}
