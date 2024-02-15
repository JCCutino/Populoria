<?php

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

//Rutas para los proyectos
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

//Rutas para los usuarios
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/saveComment' ,[HomeController::class ,'saveComment'])->name('save.comment');
Route::post('/saveCommentProject' ,[ProjectController::class ,'saveCommentProject'])->name('save.commentProject');

Route::middleware(['auth'])->group(function () {
    //todos los metodos los tendríamos que meter aquí dentro una vez hechos los perfiles de usuario
});
