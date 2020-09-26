<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {

      return view(
          'posts.index', ['posts' => BlogPost::withCount('comments')->get()]);
    }





    public function show(Request $request, $id)
    {
        //$request->session()->reflash();
        return view('posts.show', ['post'=> BlogPost::findOrFail($id)]);
    }

    public function create(){

        return view('posts.create');
    }

    public function store(StorePost $request){

        $validatedData = $request->validated();
        $blogPost = BlogPost::create($validatedData);

         $request->session()->flash('status','Post was created');

         return redirect()->route('posts.show', ['post' => $blogPost->id]);



    }

    public function edit($id){

        $post = BlogPost::findOrFail($id);
        return view('posts.edit',['post' => $post]);
    }

    public function update(StorePost $request, $id){

     $post = BlogPost::findOrFail($id);
     $validatedData = $request->validated();

     $post->fill($validatedData);

     $post->save();
     $request->session()->flash('status','Post was updated');

     return redirect()->route('posts.show', ['post' => $post->id]);






    }

    public function destroy(Request $request, $id){

        $post = BlogPost::findOrFail($id);

        $post->delete();

        $request->session()->flash('status', 'Post was deleted');
        return redirect()->route('posts.index');







    }


}
