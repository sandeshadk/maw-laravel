<?php

namespace App\Http\Controllers;

use App\Models\Download;
use App\Http\Requests\StoreDownload;
use App\Http\Requests\UpdateDownload;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads = Download::orderBy('id', "ASC")->latest()->paginate(6);

        return view('backend.download.index', compact('downloads'));
    }


    public function create()
    {
        return view('backend.download.create');
    }

    public function store(StoreDownload $request)
    {
        // dd($request);
        DB::transaction(function () use ($request)
        {
            // dd($request);
            Download::create($request->data());
        });

        return redirect()->route('download.index')->withSuccess(' download file has been uploaded successfully');
    }

    public function edit(Download $download)
    {
        return view('backend.download.edit', compact('download'));
    }

    public function update(UpdateDownload $request, Download $download)
    {
        DB::transaction(function () use ($request, $download)
        {
            $download->update($request->data($download));
        });

        return redirect()->route('download.index')->withSuccess('download file has been  successfully updated');
    }

    public function destroy(Download $download)
    {
        {

            $download->delete();

            return back()->withSuccess('download file has been successfully deleted.');
        }
    }

}
