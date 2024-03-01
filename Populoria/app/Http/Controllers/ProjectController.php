<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

    public function edit($id)
    {
        $categories =  Category::all();
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'), compact("categories"));
    }

    public function manageUsers($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.manageUsers', compact('project'));
    }

    public function createView()
    {
        $categories = Category::all();
        return view('projects.create', compact("categories"));
    }

    public function request($id)
    {
        $project = Project::findOrFail($id);
        $project->users()->attach(User::findOrFail(Auth::user()->id), ['status' => 'pending']);
        return back();
    }

    public function saveCommentProject(Request $request)
    {
        $request->validate(['comment' => 'required', 'user_id' => 'required', 'project_id' => 'required']);
        $newComment = new Comment();
        $newComment->text = $request->comment;
        $newComment->user_id = $request->user_id;
        $newComment->project_id = $request->project_id;
        $newComment->save();
        return back();
    }

    public function createProject(Request $request)
    {
        $newProject = new Project();
        $newProject->name = $request->input('name');
        $newProject->description = $request->input('description');
        $newProject->looking = $request->input('looking');
        $newProject->save();

        $newProject->users()->attach(User::findOrFail($request->input('user_id')), ['status' => 'owner']);
        $newProject->categories()->attach($request->input('categories'));


        foreach ($request->file('images') as $image) {
            $filename = time() . "-" . $image->getClientOriginalName();

            $url = "images/projects/";
            $image->move($url, $filename);

            $newProject->images()->create(['url' => $url . $filename]);
        }

        return $this->show($newProject->id);
    }

    public function editProject(Request $request)
    {

        $projectId = $request->input('idProject');
    
        $project = Project::findOrFail($projectId);
    
        $project->name = $request->input('title');
        $project->description = $request->input('description');
        $project->looking = $request->input('looking');
    
        $project->save();
    
        return redirect()->route('projects.show', $project->id);
    }
    

    public function manage($project_id, Request $request)
    {
        $project = Project::findOrFail($project_id);
        $user = User::findOrFail($request->input("user_id"));

        if ($request->input("deny")) {
            $project->users()->detach($user->id);
        } else {
            $project->users()->updateExistingPivot($user->id, ['status' => 'accepted']);
        }

        return back();
    }
}
