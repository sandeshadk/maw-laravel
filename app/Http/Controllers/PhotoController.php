<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePhoto;
use App\Http\Requests\UpdatePhoto;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Photo;

class PhotoController extends Controller
{
  public function index()
  {
    $photos = Photo::latest()->paginate(5);
    return view('backend.photo.index',compact('photos'));
  }

  public function create()
  {
    return view('backend.photo.create');
  }

  public function store(StorePhoto $request)
  {
    DB::transaction( function () use ($request)
    {
      $data = $request->data();
      $photo = Photo::create($data);
      $this->uploadRequestImage($request,$photo);
    });
    return redirect()->route('photo.index')->withsuccess(trans('image has been successfully created',[ 'entity' => 'image']));
  }

  public function show(Photo $photo)
  {
    return view($photo->view,compact('photos'));
  }

  public function edit(Photo $photo)
  {
    return view('backend.photo.edit',compact('photo'));
  }

  public function update(UpdatePhoto $request,Photo $photo)
  {
    DB::transaction(function () use($request,$photo)
    {
      $photo->update($request->data());

      $this->uploadRequestImage($request,$photo);
    });
    return redirect()->route('photo.index')->withsuccess(trans('image has been successfully updated',['entity'=>'image']));
  }

  public function delete(photo $photo)
  {
       $photo->delete();

        return back()->withsuccess(trans('image has been deleted successfully', ['entity'=>'photo']));
  }
}
