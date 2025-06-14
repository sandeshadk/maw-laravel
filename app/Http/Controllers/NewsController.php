<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNews;
use App\Http\Requests\UpdateNews;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $news = News::latest()->paginate(6);

        return view('backend.news.index', compact('news'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.news.create');
    }

    /**
     * @param StorePage $request
     * @return mixed
     */
    public function store(StoreNews $request)
    {
        DB::transaction(function () use ($request)
        {
            $news = News::create($request->data());

            $this->uploadRequestImage($request, $news);
        });

        return redirect()->route('news.index')->withSuccess(trans('New Service has been created'));
    }

    /**
     * @param Page $page
     * @return \Illuminate\View\View
     */
    public function edit(News $news)
    {
        return view('backend.news.edit', compact('news'));
    }

    public function update(UpdateNews $request, News $news)
    {
//        dd($request->all());

        DB::transaction(function () use ($request, $news)
        {
//            dd($services->all());

            $news->update($request->data());

            $this->uploadRequestImage($request, $news);
        });

        return redirect()->route('news.index')->withSuccess(trans('News has been updated'));
    }

    public function destroy(News $news)
    {
        $news->delete();
    }
}
