@extends('frontend.layouts.app')

<!--=================================
banner -->
@section('content')
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/jcb8.jpg')}}" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h1>Gallery</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('album')}}">Album</a></li>
                        <li class="breadcrumb-item"><span>{{$album->name}}</span></li>
                        
                      </ol>
                    </nav>
                </div>
            </div>
        </div> 
</section>
   
    <!--=================================
     banner -->
    <section class="news-content section-padding single-service-page our-features in-wrapper no-container no-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                        @if(!empty($album->name))
                        <div class="heading_s1 text-center">
                            <h2 class="font_style1">{{$album->name}}</h2>
                        </div>
                        @endif
                        
                        <div class="small_divider"></div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">

                    <div class="outer">
                        <div class="row" style="border: 5px solid #f1f1f1; border-bottom: 5px solid #07294D;">
                            @foreach($album->Photos as $photo)
                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 20px;">
                                    <div class="chemical-img-box img-box catergori-list " style="margin-top: 10px;">
                                        <a href="{{asset('/albums/'. $photo->image)}}" data-lightbox="gallery">
                                        <img class="thumbnail" alt="{{$album->name}}" style="height: 239px;width: 360px;"
                                             src="{{asset('/albums/'. $photo->image)}}">
                                            {{--<div class="caption">--}}
                                                {{--<p>{{$photo->description}}</p>--}}
                                            {{--</div>--}}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mt-30"></div>
                </div>
            </div>
        </div>
    </section>


    {{--<section class="news-content section-padding single-service-page our-features in-wrapper no-container no-pb">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}

                {{--<div class="col-md-12">--}}
                    {{--<div class="card-container">--}}
                        {{--<div class="row" style="border: 5px solid #f1f1f1; border-bottom: 5px solid #0787a5;">--}}
                            {{--@foreach($album->Photos as $photo)--}}
                                {{--<a href="/albums/{{$photo->image}}" data-lightbox="gallery"--}}
                                   {{--style="width:1000px; height:500px;">--}}
                                    {{--<div class="col-lg-3">--}}
                                        {{--<img class="thumbnail" style="height: 200px;" alt="{{$album->name}}"--}}
                                             {{--src="{{asset('/albums/'. $photo->image)}}">--}}
                                        {{--<div class="caption">--}}
                                            {{--<p>{{$photo->description}}</p>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

@endsection

@push('scripts')
    <script type="text/javascript" src="{{asset('js/lightbox.min.js')}}"></script>
@endpush