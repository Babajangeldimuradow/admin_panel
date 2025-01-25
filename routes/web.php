<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

use App\Models\Student;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});

Route::view('/', [StudentController::class, 'student']);
Route::get('/edit/{id}',[StudentController::class, 'edit']);
Route::get('/show/{id}',[StudentController::class, 'show']);
Route::get('/create',[StudentController::class, 'create']);
Route::post('/store',[StudentController::class, 'store']);
Route::post('/update/{id}',[StudentController::class, 'update']);
*/

Route::view('/','home');
////////////////////////////////////////////////////////
Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class,  'create'])->name('post.create');
Route::post('/posts', [PostController::class,  'store'])->name('post.store');
Route::get('/posts/{post}', [PostController::class,  'show'])->name('post.show');
Route::get('/posts/{post}/edit', [PostController::class,  'edit'])->name('post.edit');
Route::patch('/posts/{post}/', [PostController::class,  'update'])->name('post.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');

Route::get('/posts/update', [PostController::class,  'update']);
Route::get('/posts/delete', [PostController::class,  'delete']);
Route::get('/posts/first_or_create', [PostController::class,  'firstOrCreate']);

Route::get('/main', [MainController::class,  'index'])->name('main.index');
Route::get('/about', [AboutController::class,  'index'])->name('about.index');
Route::get('/contact', [ContactController::class,  'index'])->name('contact.index');





