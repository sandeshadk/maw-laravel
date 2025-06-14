@extends('backend.layouts.app')

@section('title', 'Album')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">all album</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route(substr(Route::currentRouteName(), 0 , strpos(Route::currentRouteName(), '.')) . '.createalbum') }}">
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($albums as $album)
                            <div class="col-lg-3" style="height: 370px;">
                                <div class="thumbnail" style="min-height: 50px;">
                                    <img alt="{{$album->name}}" src="{{asset('/albums/'.$album->cover_image)}}">
                                    <div class="caption">
                                        <a href="{{route('album.show_album', ['id'=>$album->id])}}"><h3>{{$album->name}}</h3></a>
                                        <p>{{$album->description}}</p>
                                        <strong><p>{{count($album->Photos)}} image(s).</p></strong>
                                        <a href="{{route('album.delete_album',array('id'=>$album->id))}}"
                                           onclick="return confirm('Are you sure?')">
                                            <button type="button" class="btn btn-danger btn-large">Delete Album</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

