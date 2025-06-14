@extends('frontend.layouts.app')
@section('content')
<!-- START SECTION BREADCRUMB -->
	<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/jcb8.jpg')}} " >
		<div class="container">
	    	<div class="row align-items-center">
	        	<div class="col-sm-6">
	            	<div class="page-title">
	            		<h1>Programs</h1>
	                </div>
	            </div>
	            <div class="col-sm-6">
	                <nav aria-label="breadcrumb">
	                  <ol class="breadcrumb justify-content-sm-end">
	                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
	                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('programs')}}">Programs</a></li>
	                  </ol>
	                </nav>
	            </div>
	        </div>
	    </div> 
	</section>
	<!-- END SECTION BANNER -->

<!-- START SECTION SErvices details  -->
	<section>
		<div class="container">
	        <div class="row">
	        	<div class="col-lg-9">
	            	<div class="single_course">
	                    <div class="course_img">
	                    	@if(!empty($service->image->path))
	                        <a href="#">
	                            <img src="{{asset($service->image->path)}}" alt="course_img_big">
	                        </a>
	                        @endif
	                      
	                    </div>
	                    <div class="course_detail alert-warning">
	                        <div class="course_title">
	                            <h2>{{ $service ->title }}</h2>
	                        </div>
	                        
	                    </div>
	                    <div class="course_tabs">
	                   
	                        <div class="tab-content">
	                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab1">
	                               
	                               <div class="border radius_all_5 tab_box"> 
	                               @if(!empty($service->content))
	                               	<p>
	                               		{!! $service->content !!}
	                               		
	                               	</p>
	                               	@endif
									</div>
	                               		
	                            </div>
	                            
	                           
	                        </div>
	                    </div>
	                    
	                </div>
	            </div>
	            <div class="col-lg-3 mt-lg-0 mt-4 pt-3 pt-lg-0">
	            	<div class="sidebar">

	                    <!-- <div class="widget widget_categories">
                        	<h5 class="widget_title">Categories</h5>
                            <ul>
                                <li><a href="#"><span class="categories_name">Development</span></a></li>
                                <li><a href="#"><span class="categories_name">Business</span></a></li>
                                <li><a href="#"><span class="categories_name">Academics</span></a></li>
                                <li><a href="#"><span class="categories_name">Health Fitness</span></a></li>
                                <li><a href="#"><span class="categories_name">Photography</span></a></li>
                        	</ul>
                        </div> -->
                        <div class="widget widget_recent_post">
                        	<h5 class="widget_title">Related Trainings</h5>
                            <ul class="recent_post border_bottom_dash list_none">
                            	@if(!empty($services))
                            	@foreach($services as $data)
                                <li>
                                    <div class="post_footer">
                                    	@if(!empty($data->image->path))
                                        <div class="post_img">
                                            <a href="{{route('programs',$data->slug)}}"><img src="{{asset($data->image->path)}}" alt="letest_post1"></a>
                                        </div>
                                        @endif
                                        @if(!empty($data->title))
                                        <div class="post_content">
                                            <h6><a href="{{route('programs',$data->slug)}}">{{$data->title}}</a></h6>
                                        </div>
                                        @endif
                                    </div>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <div>
	                    	<h5 class="widget_title">Our Feeds</h5>
	                    	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMAW-Academy-for-Skills-Development-102428581395086&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    	</div>
	                    
	                    
	                    
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
<!-- END SECTION COURSE DETAIL -->
@endsection