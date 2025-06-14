<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use App\Http\Requests\UpdatePost;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Post;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::latest()->paginate(6);
    return view('backend.post.index',compact('posts'));
  }

  public function create()
  {
    return view('backend.post.create');
  }

  public function store(StorePost $request)
  {
    DB::transaction( function () use ($request)
    {
      $data = $request->data();
      $post = Post::create($data);
      $this->uploadRequestImage($request,$post);
    });
    return redirect()->route('post.index')->withsuccess(trans('posts has been successfully created',[ 'entity' => 'post']));
  }

  public function show(Post $post)
  {
    return view($page->view,compact('posts'));
  }

  public function edit(Post $post)
  {
    return view('backend.post.edit',compact('post'));
  }

  public function update(UpdatePost $request,Post $post)
  {
    DB::transaction(function () use($request,$post)
    {
      $post->update($request->data());

      $this->uploadRequestImage($request,$post);
    });
    return redirect()->route('post.index')->withsuccess(trans('post has been successfully updated',['entity'=>'post']));
  }

  public function destroy(post $post)
  {
       $post->delete();
        return back()->withsuccess(trans('posts has been deleted successfully', ['entity'=>'post']));
  }
}
