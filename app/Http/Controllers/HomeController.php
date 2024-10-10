<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        $projects = projects::with('projectImages')->take(4)->get();

        return view('welcome', compact('projects'));
    }

    public function projects()
    {
        $projects = projects::with('projectImages')->get();

        return view('projects', compact('projects'));
    }
}
