<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('id', '<>', 1)->get();
        return view('projects.index', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    public function saveCommentProject(Request $request){
        $request->validate(['comment'=>'required', 'user_id'=>'required', 'project_id'=>'required']);
        $newComment= new Comment();
        $newComment->text=$request->comment;
        $newComment->user_id=$request->user_id;
        $newComment->project_id=$request->project_id;
        $newComment->save();
        return back();
    }

}
