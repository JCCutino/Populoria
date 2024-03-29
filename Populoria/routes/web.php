<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Rutas para el landing page
Route::get('/', function () {
    return view('welcome');
})->name("welcome");



Route::middleware(['auth'])->group(function () {

    //Rutas para los proyectos
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [ProjectController::class, 'createView'])->name('projects.create');
    Route::post('/projects/create/new', [ProjectController::class, 'createProject'])->name('projects.createNew');
    Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
    Route::get('/projects/{project}/users', [ProjectController::class, 'manageUsers'])->name('projects.manage');
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::get('/projects/{project}/request', [ProjectController::class, 'request'])->name('projects.request');
    Route::post('/projects/{project}/request/manage', [ProjectController::class, 'manage'])->name('projects.request.manage');
    Route::post('/projects/edit', [ProjectController::class, 'editProject'])->name('projects.editProject');
    Route::post('/projects', [ProjectController::class, 'filterProject'])->name('projects.filter');

    Route::post('/logout', [HomeController::class, 'logout'])->name('logout');
   
    //Rutas para los usuarios
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::post('/users/edit', [UserController::class, 'editUser'])->name('users.editUser');

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/saveComment', [HomeController::class, 'saveComment'])->name('save.comment');
    Route::post('/saveCommentProject', [ProjectController::class, 'saveCommentProject'])->name('save.commentProject');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/template', function () {
        return view('admin.template');
    });
});
