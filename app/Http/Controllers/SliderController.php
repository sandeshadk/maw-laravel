<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSlider;
use App\Http\Requests\UpdateSlider;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Slider;

class SliderController extends Controller
{
  public function index()
  {
    $sliders = SLider::latest()->get();
    return view('backend.slider.index',compact('sliders'));
  }

  public function create()
  {
    return view('backend.slider.create');
  }

  public function store(StoreSlider $request)
  {
    $request->validate([
            'title' => 'required',
            'image' => 'image|max:4096',
        ]);
    DB::transaction( function () use ($request)
    {
      $data = $request->data();
      $slider = Slider::create($data);
      $this->uploadRequestImage($request,$slider);
    });
    return redirect()->route('slider.index')->withsuccess(trans('slider image has been successfully created',[ 'etity' => 'slider']));
  }

  public function show(Slider $slider)
  {
    return view($slider->view,compact('sliders'));
  }

  public function edit(Slider $slider)
  {
    return view('backend.slider.edit',compact('slider'));
  }

  public function update(UpdateSlider $request,Slider $slider)
  {
    DB::transaction(function () use($request,$slider)
    {
      $slider->update($request->data());

      $this->uploadRequestImage($request,$slider);
    });
    return redirect()->route('slider.index')->withsuccess(trans('slider has been successfully updated',['entity'=>'slider']));
  }

  public function delete(slider $slider)
  {
       $slider->delete();

        return back()->withsuccess(trans('slider has been deleted successfully', ['entity'=>'slider']));
  }
}
