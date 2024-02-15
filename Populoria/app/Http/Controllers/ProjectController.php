<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;

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

    public function createView()
    {
        $categories = Category::all();
        return view('projects.create', compact("categories"));
    }

    public function createProject(Request $request)
    {
        $newProject = new Project();
        $newProject->name = $request->input('name');
        $newProject->description = $request->input('description');
        $newProject->looking = $request->input('looking');
        $newProject->save();

        $newProject->users()->attach(User::findOrFail($request->input('user_id')));
        $newProject->categories()->attach($request->input('categories'));

        
        foreach ($request->file('images') as $image) {
            $filename = time() . "-" . $image->getClientOriginalName();
        
            $url = "images/projects/";
            $image->move($url, $filename);

            $newProject->images()->create(['url' => $url . $filename]);
        }

        return $this->show($newProject->id);
    }
}
