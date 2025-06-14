@extends('frontend.layouts.app')
@section('content')
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/jcb8.jpg')}}" >
		<div class="container">
	    	<div class="row align-items-center">
	        	<div class="col-sm-6">
	            	<div class="page-title">
	            		<h2>Learners Testimonials</h2>
	                </div>
	            </div>
	            <div class="col-sm-6">
	                <nav aria-label="breadcrumb">
	                  <ol class="breadcrumb justify-content-sm-end">
	                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
	                    
	                  </ol>
	                </nav>
	            </div>
	        </div>
	    </div> 
</section>
@if(!empty($learner))
<section class="background_bg bg_fixed" data-img-src="assets/images/pattern_bg3.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2 class="font_style1">Learners Testimonials</h2>
                    </div>
                    
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-12 animation " data-animation="fadeInUp" data-animation-delay="1.2s">
                <div class="testimonial_slider testimonial_style5 carousel_slider owl-carousel owl-theme nav_style2" data-loop="true" data-autoplay="true" data-nav="true" data-dots="false" data-touch-drag="false" data-mouse-drag="false" data-animate-in="flipInX" data-animate-out="slideOutDown" data-smart-speed="900" data-interval="6000" data-pause="true" data-items="1" id="my-carousel">
                    @foreach($learner as $data)
                    <div class="testimonial_box" id="testimonial_box">
                        
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="team_single radius_all_10 box_shadow1">
                                    @if(!empty($data->image->path))
                                    <div class="team_img test_img">
                                        <img class="radius_ltrt_10 test_img" src="{{asset($data->image->path)}}" alt="team_img_big">
                                        @if(!empty($data->url))
                                        <a href="{{$data->url}}" class="video_play video_popup">           
                                            <span class="ripple"><i class="ion-play ml-1"></i></span>
                                        </a>
                                        @endif
                                    </div>
                                    @endif
                                    
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <div class="teacher_desc mt-4 mt-md-0">
                                    @if(!empty($data->title))
                                    <h5 class="mb-3">{!! $data->title !!}</h5>
                                    @endif
                                    @if(!empty($data->content))
                                    <p>{!! $data->content !!}</p>
                                    @endif
                                    
                                </div>
                                
                                   
                            </div>
                        </div>
                        
                    </div>
                    @endforeach                    
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@push('scripts')
<script>
    $("#testimonial_box").mouseover(function(){
       $("#my-carousel").carousel('pause');
    },function(){
       $("#my-carousel").carousel('cycle');
    });
</script>

<script>
    
    $('.owl-carousel').carousel({
    interval: 2000,
    cycle: true,
    pause: "null"
})
</script>
@endpush

@endsection