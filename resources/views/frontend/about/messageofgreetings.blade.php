@extends ('frontend.layouts.app')
@section ('content')
	<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/bod.jpg')}}" >
		<div class="container">
	    	<div class="row align-items-center">
	        	<div class="col-sm-6">
	            	<div class="page-title">
	            		<h1>Message of Greetings</h1>
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
        <div class="event_title">
            <div class="row align-items-end">
                <div class="col-md-8">
                    <h1>Message of Greetings</h1>                                
                </div>                            
            </div>
        </div>
        <div class="row title_row">
            
        	<div class="col-lg-9">
                @if(!empty($messageofmd))
                <div class="row" style="border-bottom: 1px solid #dad1b9; border">
                    <div class="col-lg-4 col-sm-6">
                        
                        <div class="team_box team_style4 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                            <div class="team_img team-img">
                                <img  src="{{asset($messageofmd->image->path)}}" alt="team1">
                                
                            </div>
                            
                            
                        </div>
                        
                    
                    </div>
                    <div class="col-lg-8 col-sm-6">
                        <div class="teacher_desc mt-4 mt-md-0">
                            <h2 class="mb-3">Message from MD </h2>
                            <p>{!! $messageofmd->content !!}</p>
                        </div>
                        
                    </div>
                    
                    
                </div>
                @endif

                @if(!empty($messageofceo))
                <div class="row " style="border-bottom: 1px solid #dad1b9; margin-top: 60px;">
                    
                    <div class="col-lg-4 col-sm-6">
                        <div class="team_box team_style4 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                            <div class="team_img team-img">
                                <img  src="{{asset($messageofceo->image->path)}}" alt="team1">
                                
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-8 col-sm-6">
                        <div class="teacher_desc mt-4 mt-md-0">
                            <h2 class="mb-3">Message from CEO </h2>
                            <p>{!! $messageofceo->content !!}</p>
                        </div>
                        
                    </div>
                    
                </div>
                @endif
            	
            </div>
            <div class="col-lg-3 mt-lg-0 mt-4 pt-3 pt-lg-0">
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



   

@endsection
