<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        // This is a view for list of jobs
        return view('jobs.index', ['jobs' => Job::latest()->get()]);
    }
    public function show(Job $job){
        // This is a view for list of jobs
        return view('jobs.show', ['job' => $job ]);
    }
}
