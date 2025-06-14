@extends('frontend.layouts.app')
@section('content')
<!-- START SECTION BREADCRUMB -->
	<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/jcb8.jpg')}}" >
		<div class="container">
	    	<div class="row align-items-center">
	        	<div class="col-sm-6">
	            	<div class="page-title">
	            		<h1>News</h1>
	                </div>
	            </div>
	            <div class="col-sm-6">
	                <nav aria-label="breadcrumb">
	                  <ol class="breadcrumb justify-content-sm-end">
	                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
	                    <li class="breadcrumb-item active" aria-current="page"><a href="#">News</a></li>
	                  </ol>
	                </nav>
	            </div>
	        </div>
	    </div> 
	</section>
	<!-- END SECTION BANNER -->
	<!-- START SECTION COURSES -->
	<section class="small_pt">
		<div class="container">
			<div class="row">
	        	<div class="col-md-12">
	            	<div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
	                	<h2>Latest News</h2>
	                </div>
	            </div>
        	</div>
        	@if(!empty($newses))
	        <div class="row">
	        	@php
	        	$count=1;
	        	@endphp
	        	<div class="carousel_slider owl-carousel owl-theme" data-margin="10" data-loop="false" data-autoplay="true" data-nav="true" data-dots="false" data-responsive='{"0":{"items": "1"}, "767":{"items": "2"}, "1199":{"items": "3"}}'>
		        	@foreach($newses as $data)

		        	<div class="item" >
		        		<div class="col-lg-4 col-sm-6">
		        			<div class="content_box new_content radius_all_10 box_shadow1 animation " data-animation="fadeInUp" data-animation-delay="0.0{{$count}}s" style="width: 350px; ,height: 420px;" >
			                	<div class="content_img radius_ltrt_10">
			                    	@if(!empty($data->image->path))
			                    	<a href="#"><img src="{{asset($data->image->path)}}" alt="course_img1"/></a>
			                    	@endif
			                    	<div class="event_date">
			                        	<h5><span>{{$data->created_at->format('d')}}</span> </h5>
			                        	<span class="event_time bg_default">{{$data->created_at->format('M')}} {{$data->created_at->format('Y')}}</span>
			                            
                        			</div>
			                    </div>
			                    <div class="content_desc content_text">
			                    	@if(!empty($data->title))
			                    	<h4 class="content_title"><a href="#">{{$data->title}}</a></h4>
			                    	@endif
			                    	@if(!empty($data->content))
			                        <p>{!! str_limit($data->content,100) !!}</p>
			                        @endif
			                        <div class="enroll_btn">
		                            	<a href="{{route('news',$data->slug)}}" class="btn btn-default btn-sm">Read More</a>
		                        	</div>
			                    </div>
		                  
		                	</div>
		        			
		        		</div>
		            	
		            </div>
		            @php
		            $count++;
		            @endphp
		            @endforeach
	            </div>
	        </div>
	        @endif
	        
	    </div>
	</section>
<!-- END SECTION COURSES -->


@endsection