@extends('frontend.layouts.app')
@section('content')
<!-- START SECTION BREADCRUMB -->
	<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/jcb8.jpg')}}" >
		<div class="container">
	    	<div class="row align-items-center">
	        	<div class="col-sm-6">
	            	<div class="page-title">
	            		<h1>{{$history->title}}</h1>
	                </div>
	            </div>
	            <div class="col-sm-6">
	                <nav aria-label="breadcrumb">
	                  <ol class="breadcrumb justify-content-sm-end">
	                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
	                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('history')}}">{{$history->title}}</a></li>
	                  </ol>
	                </nav>
	            </div>
	        </div>
	    </div> 
	</section>
	<!-- END SECTION BANNER -->


	
	<!-- START SECTION ABOUT -->
	<section class="small_pt small_pb overflow-hidden">
		<div class="container-fluid p-0">
	    	<div class="row no-gutters align-items-center">
	        	<div class="col-md-6">
	            	<div class="box_shadow1 bg-white overlap_section padding_eight_all">
	                	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
	                		
	                        <div class="heading_s1"> 
	                          <h2>Our history</h2>
	                        </div>
	                        
	                        @if(!empty($history->content))
	                        <p>
	                        	{!! $history-> content !!}
							</p>
							@endif
	                        
	                    </div>
	                </div>
	            </div>
	        	<div class="col-md-6">
	            	<div class="animation" data-animation="fadeInRight" data-animation-delay="0.03s">
	                	<div class="overlay_bg_30 about_img z_index_minus1">	
	                    	<img class="w-100" src="{{asset($history->image->path)}}" alt="about_img"/>
	                    </div>
	                	<a href="{{$history->url}}" class="video_play video_popup"> 
	                    	<span class="ripple"><i class="ion-play ml-1"></i></span>
	                    </a>
	                </div>
	            </div>
	        </div>
	        <div class="row no-gutters align-items-center p-5">
	        	<div class="col-lg-12">
	        		<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
	        			<div class="heading_s1">
	        				{!! $history->meta_description !!}
	        				
	        			</div>
	        			
	        		</div>

	        		
	        	</div>
	        </div>
	    </div>
	</section>
	<!-- END SECTION ABOUT -->
	@endsection