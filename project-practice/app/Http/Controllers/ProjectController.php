<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(): Renderable
    {
        $projects = Project::paginate(1);
        return view('projects.index', compact('projects'));
    }
}
