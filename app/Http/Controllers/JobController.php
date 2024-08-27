<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        // This is a view for list of jobs
        return view('jobs.index', ['jobs' => Job::filter(
            request(['search', 'tag'])
        )->paginate(18)->withQueryString()
        ]);
    }
    public function show(Job $job){
        $relatedJobs = $job->relatedJobs();
        return view('jobs.show', [
            'job' => $job,
            'relatedJobs' => $relatedJobs]);
    }
}

