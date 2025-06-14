<?php

namespace App\Http\Controllers;

use App\Image;
use App\Models\Album;
use App\Http\Requests\StoreAlbum;
use App\Http\Requests\UpdateAlbum;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use Validator;

class AlbumController extends Controller
{
    public function getList()
    {
        $albums = Album::with('Photos')->get();
        return view('backend.album.index')->with('albums',$albums);
    }

    public function getAlbum($id)
    {
        $album = Album::with('Photos')->find($id);
        $albums = Album::with('Photos')->get();
        return view('backend.album.album', ['album'=>$album, 'albums'=>$albums]);
    }

    public function getForm()
    {
        return view('backend.album.createalbum');
    }

    public function postCreate(Request $request)
    {

        $rules = ['name' => 'required', 'cover_image'=>'required|image'];

        $input = ['name' => null];

        //Validator::make($input, $rules)->passes(); // true

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            // return Redirect::route('create_album_form') ;
            return redirect()->route('album.createalbum')->withErrors($validator)->withInput();
        }

        // $file = Input::file('cover_image');
        $file = $request->file('cover_image');
        $random_name = str_random(8);
        $destinationPath = 'albums/';
        $extension = $file->getClientOriginalExtension();
        $filename=$random_name.'_cover.'.$extension;
        $uploadSuccess = $request->file('cover_image')->move($destinationPath, $filename);
        $album = Album::create(array(
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'cover_image' => $filename,
        ));

        return redirect()->route('album.show_album',['id'=>$album->id]);
    }

    public function getDelete($id)
    {
        $album =Album::where('id',$id);

        $album->delete();

        return Redirect::route('album.index');
    }


//    public function index()
//    {
//        $albums = Album::all();
//
//        return view('backend.album.index', compact('albums'));
//    }
//
//    /**
//     * Show the form for creating a new resources.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        return view('backend.album.create');
//    }
//
//    /**
//     * Store a newly created resources in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(StoreAlbum $request)
//    {
////        dd($request->all());
//        DB::transaction(function () use ($request)
//        {
//            $album = Album::create($request->data());
//
//            $this->uploadRequestImage($request, $album);
//        });
//
//        return redirect()->route('album.index')->withSuccess(trans('New Album has been created'));
//    }
//
//    /**
//     * Display the specified resources.
//     *
//     * @param  \App\Album  $album
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Album $album,Image $id)
//    {
//        $albums = Image::where('id', $id);
//
//        return view('backend.album.album', compact('album','albums'));
//    }
//
//    /**
//     * Show the form for editing the specified resources.
//     *
//     * @param  \App\Album  $album
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Album $album)
//    {
//        return view('backend.album.edit', compact('album'));
//    }
//
//    public function update(UpdateAlbum $request, Album $album)
//    {
//        DB::transaction(function () use ($request, $album)
//        {
//            $album->update($request->data());
//
//            $this->uploadRequestImage($request, $album);
//        });
//
//        return redirect()->route('album.index')->withSuccess(trans('Album has been updated'));
//    }
//
//    public function destroy($id)
//    {
//        $album =Album::where('id',$id);
//
//        $album->delete();
//
//        return Redirect::route('album.index');
//    }
//
//    public function addAlbumimage(Album $album)
//    {
//        return view('backend.album.addAlbumimage' , compact('album'));
//    }
//
//    public function createAlbumimage(Request $request ,Album $album)
//    {
////        dd($request);
////        DB::transaction(function () use ($request)
////        {
////            $album = Album::create($request->data());
//
////        dd($request->all());
//        $this->uploadRequestImage($request, $album);
////        });
//
//
//        return redirect()->route('album.show', $album->id)->withSuccess(trans('New Image has been created'));
//    }
//
//    public function destroyimage($id)
//    {
//        $image = Image::find($id);
//        $image->delete();
//
//        return redirect()->route('album.show', [ 'id' => $image->album_id ]);
//    }

}
