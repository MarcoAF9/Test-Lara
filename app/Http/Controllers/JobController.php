<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController 
{
    function index(){
    $jobs = Job::all();
        return view("Job/index",["jobs" => $jobs,"name" => "Marko"]);
    }
}
