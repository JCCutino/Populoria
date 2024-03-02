<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $isOwnProfile = Auth::check() && Auth::user()->id == $id;
        return view('users.show', compact('user', 'isOwnProfile'));
    }


    public function edit($id)
    {
        $categories =  Category::all();
        $user = User::findOrFail($id);
        $isOwnProfile = Auth::check() && Auth::user()->id == $id;

        if ($isOwnProfile) {
            return view('users.edit', compact('user', 'categories'));
        } else {
            return view('users.show', compact('user', 'isOwnProfile'));
        }
    }

    public function editUser(Request $request)
    {
        $userId = $request->user_id;

        $user = User::findOrFail($userId);

        $user->name = $request->name;
        $user->about = $request->about;

        $user->save();

        $selectedCategories = json_decode($request->input('selected_categories'), true);

        DB::table('category_user')->where('user_id', $userId)->delete();

        if (!empty($selectedCategories)) {
            foreach ($selectedCategories as $categoryId) {
                $user->categories()->attach($categoryId);
            }
        }

        return redirect()->route('users.show', $userId)->with('success', 'Perfil actualizado exitosamente.');
    }
}
