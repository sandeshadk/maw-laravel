@extends ('frontend.layouts.app')
@section ('content')
	<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/bod.jpg')}}" >
		<div class="container">
	    	<div class="row align-items-center">
	        	<div class="col-sm-6">
	            	<div class="page-title">
	            		<h1>Overview</h1>
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
	
	<!-- START SECTION COURSE DETAIL -->
<section>
	<div class="container">
        <div class="row">
        	<div class="col-lg-8">
            	<div class="row">
                    <div class="single_event">
                        @if(!empty($text->image->path))
                        <div class="course_img">
                            <a href="#">
                                <img src="{{$text->image->path}}" alt="course_img_big">
                            </a>
                            
                        </div>
                        @endif
                        
                        <div class="event_title">
                            <div class="row align-items-end">
                                <div class="col-md-8">
                                    
                                    @if(!empty($text->title))
                                    <h1>{{ $text->title }}</h1>
                                    @endif                               
                                </div>
                                
                            </div>
                        </div>
                        
                        @if(!empty($text->content))
                    
                        <div class="entry_content" style="margin-top: 25px;">
                            <p>
                                {!! $text->content !!}
                            </p>
                        </div>
                        @endif
                        
                        
                    </div>   
                </div>
                
                
                
            </div>    
            <div class="col-lg-4 mt-lg-0 mt-4 pt-3 pt-lg-0">
            	<div class="sidebar">                   
                   
                    <div>
                    	<h5 class="widget_title">Our Feeds</h5>
                    	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMAW-Academy-for-Skills-Development-102428581395086&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COURSE DETAIL -->

<section class=" client_section" style="margin-top: 40px;">
    <div class="container-fluid">
        <div class="row">

           <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.01s">


               @php
               $count=0;
               @endphp
               <div class=" carousel_slider owl-carousel owl-theme" data-margin="15" data-loop=" true " data-autoplay="true" data-dots="false" data-responsive='{"0":{"items": "2"}, "380":{"items": "3"}, "600":{"items": "4"}, "1000":{"items": "5"}, "1199":{"items": "6"}}'>

                @foreach($logo as $data)
                <div class="item  ">
                   <img class="client_img"  src="{{asset($data->image->path)}}" alt="cl_logo"/>
                </div>

                @php
                $count++;
                @endphp
                @endforeach  
            </div>





         </div>  
       
    </div>
   
       


</section>




   

@endsection
