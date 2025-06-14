<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePage;
use App\Http\Requests\UpdatePage;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Page;

class PageController extends Controller
{
  public function index()
  {
    $pages = Page::latest()->paginate(6);
    return view('backend.page.index',compact('pages'));
  }

  public function create()
  {
    return view('backend.page.create');
  }

  public function store(StorePage $request)
  {
    DB::transaction( function () use ($request)
    {
      $data = $request->data();
      $page = Page::create($data);
      $this->uploadRequestImage($request,$page);
    });
    return redirect()->route('page.index')->withsuccess(trans('pages has been successfully created',[ 'entity' => 'page']));
  }

  public function show(Page $page)
  {
    return view($page->view,compact('pages'));
  }

  public function edit(Page $page)
  {
    return view('backend.page.edit',compact('page'));
  }

  public function update(UpdatePage $request,Page $page)
  {
    DB::transaction(function () use($request,$page)
    {
      $page->update($request->data());

      $this->uploadRequestImage($request,$page);
    });
    return redirect()->route('page.index')->withsuccess(trans('pages has been successfully updated',['entity'=>'page']));
  }

  public function destroy(page $page)
  {
       $page->delete();
        return back()->withsuccess(trans('pages has been deleted successfully', ['entity'=>'page']));
  }
}
