<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy("date","desc")->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create', );
    }

    public function edit($id)
    {
        $project = Project::find($id);
        if(is_object($project)){
            return view('admin.projects.edit', compact("project") );
        }else{
            return Redirect::back()->with("error","Project not found");
        }
    }
    public function destroy($id)
    {
        $project = Project::find($id);
        if(is_object($project)){
            $project->delete();
            return Redirect::route("projects.index")->with("success","Project successfully deleted!");
        }else{
            return Redirect::back()->with("error","Project not found");
        }
    }
}
