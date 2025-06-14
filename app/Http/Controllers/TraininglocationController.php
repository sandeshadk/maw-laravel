<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTraininglocation;
use App\Http\Requests\UpdateTraininglocation;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Traininglocation;

class TraininglocationController extends Controller
{
  public function index()
  {
    $locations = Traininglocation::latest()->paginate(6);
    return view('backend.traininglocation.index',compact('locations'));
  }

  public function create()
  {
    return view('backend.traininglocation.create');
  }

  public function store(StoreTraininglocation $request)
  {
    DB::transaction( function () use ($request)
    {
      $data = $request->data();
      $location = Traininglocation::create($data);
      $this->uploadRequestImage($request,$location);
    });
    return redirect()->route('traininglocation.index')->withsuccess(trans('address has been successfully created',[ 'entity' => 'location']));
  }

  public function show(Traininglocation $location)
  {
    return view($location->view,compact('locations'));
  }

  public function edit(Traininglocation $location)
  {
    return view('backend.traininglocation.edit',compact('location'));
  }

  public function update(UpdateTraininglocation $request,Traininglocation $location)
  {
    DB::transaction(function () use($request,$location)
    {
      $location->update($request->data());

      $this->uploadRequestImage($request,$location);
    });
    return redirect()->route('traininglocation.index')->withsuccess(trans('addresses has been successfully updated',['entity'=>'location']));
  }

  public function delete(Traininglocation $location)
  {
       $location->delete();
        return back()->withsuccess(trans('location has been deleted successfully', ['entity'=>'location']));
  }
}
