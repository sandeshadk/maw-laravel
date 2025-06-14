<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreForm;
use App\Http\Requests\UpdateForm;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Form;

class FormController extends Controller
{
  public function index()
  {
    $forms = Form::latest()->paginate(6);
    return view('backend.form.index',compact('forms'));
  }

  public function create()
  {
    return view('backend.form.create');
  }

  public function store(StoreForm $request)
  {
    DB::transaction( function () use ($request)
    {
      $data = $request->data();
      $form = Form::create($data);
      $this->uploadRequestImage($request,$form);
    });
    return redirect()->route('form.index')->withsuccess(trans('form has been successfully created',[ 'entity' => 'form']));
  }

  public function show(Form $form)
  {
    return view($form->view,compact('pages'));
  }

  public function edit(Form $form)
  {
    return view('backend.form.edit',compact('form'));
  }

  public function update(UpdateForm $request,Form $form)
  {
    DB::transaction(function () use($request,$form)
    {
      $form->update($request->data());

      $this->uploadRequestImage($request,$form);
    });
    return redirect()->route('form.index')->withsuccess(trans('form has been successfully updated',['entity'=>'form']));
  }

  public function destroy(form $form)
  {
       $form->delete();
        return back()->withsuccess(trans('form has been deleted successfully', ['entity'=>'form']));
  }
}
