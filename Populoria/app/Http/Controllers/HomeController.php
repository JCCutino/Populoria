<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LogoutResponse;
use Illuminate\Http\Request;
use App\Models\Comment;

class HomeController extends Controller
{
    public function index()
    {
        $comments = Comment::where('project_id', 1)->get();

        return view('home', compact('comments'));
    }

    public function saveComment(Request $request){
        $request->validate(['comment'=>'required', 'user_id'=>'required']);
        $newComment= new Comment();
        $newComment->text=$request->comment;
        $newComment->user_id=$request->user_id;
        $newComment->project_id=1;
        $newComment->save();
        return back();
    }

    
    public function logout(Request $request): LogoutResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return app(LogoutResponse::class);
    }


}