<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class jobController extends Controller
{
    //
    public function index()
    {
        $jobs=Job::all();
        return view('job/index',["jobs"=>$jobs,"name"=>"mahmoud"]);
    }
}
