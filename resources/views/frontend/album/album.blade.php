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
                         <li class="breadcrumb-item"><span>Album</span></li>
                        
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
                        <div class="heading_s1 text-center">
                            <h2 class="font_style1">Our Gallery</h2>
                        </div>
                        
                        <div class="small_divider"></div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">

                    <div class="outer">
                        <div class="row" style="border: 5px solid #f1f1f1; border-bottom: 5px solid #07294D;">
                            @foreach($albums as $album)
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="chemical-img-box img-box catergori-list" style="margin-top: 10px;">
                                        <img alt="{{$album->name}}" style="height: 239px;width: 360px;" src="{{asset('/albums/'.$album->cover_image)}}">
                                        <a href="{{route('show_album_view', ['id'=>$album->id])}}">
                                            <p style="bottom: 10px"> {{$album->name}} , {{count($album->Photos)}} image(s).</p>
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

@endsection