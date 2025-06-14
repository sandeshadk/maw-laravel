@extends('frontend.layouts.app')
@section('content')
<!-- START SECTION BREADCRUMB -->
	<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/jcb8.jpg')}}" >
		<div class="container">
	    	<div class="row align-items-center">
	        	<div class="col-sm-6">
	            	<div class="page-title">
	            		<h1>Our Training Locations</h1>
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
	<!-- END SECTION BANNER -->
	
	<!-- START SECTION CONTACT -->
	<section class="small_pt">
		<div class="container">	
	    	<div class="row justify-content-center">
	        	<div class="col-xl-6 col-lg-8">
	            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
	                    <div class="heading_s1 text-center">
	                        <h2>Our Training locations</h2>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	        	@if(!empty($training))
	        	@foreach($training as $data)
	            <div class="col-md-4">
	                <div class="overlay_bg_default_90 icon_box text-center text_white radius_all_10 background_bg animation overlay_card" data-img-src="{{asset('assets/images/address_img.jpg')}}" data-animation="fadeInUp" data-animation-delay="0.02s">
	                	<div class="box_icon mb-3" >
	                		<img src="{{asset('assets/images/map_icon.png')}}" style="max-width: 40px;" alt="map_icon">
	                    </div>
	                    <div class="intro_desc">
	                        
	                        <p>{!! $data ->address !!}</p>

	                    </div>
	                </div>
	            </div>
	            @endforeach
	            @endif
	           
	        </div>
	    </div>
	</section>
<!-- END SECTION CONTACT -->
@endsection