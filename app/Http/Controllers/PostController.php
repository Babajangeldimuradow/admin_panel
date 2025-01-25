<?php

namespace App\Http\Controllers;
use\App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(){
    $posts = Post::all();
    return view('post.index', compact('posts'));
   }

   public function create(){

        return view ('post.create');

   }
   public function  edit(Post $post)
   {
      return view('post.edit', compact('post'));
   }

 public function store(){
   $data = request()->validate([
      'title' => 'required|string',
      'content' => 'required|string',
      'image' => 'required|string'
   ]);

   Post::create($data);

   return redirect('/posts');
}
 
public function show(Post $post){

  return view('post.show',compact('post'));

}


   public function update(Post $post) {
      $data = request()->validate([
         'title' => 'required|string',
         'content' => 'required|string',
         'image' => 'required|string'
      ]);
      $post->update($data);
      return redirect('/posts');
   }

   public function delete() {
      $post = Post::withTrashed()->find(6);
      $post->restore();
      dd('deleted');
   }

   public function destroy(Post $post) {
      $post->delete();
      return redirect('/posts'); 
   }
}

