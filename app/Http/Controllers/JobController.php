<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        // This is a view for list of jobs
        return view('jobs.index');
    }
}
