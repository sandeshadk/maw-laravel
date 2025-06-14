@extends ('frontend.layouts.app')
@section ('content')
	<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/bod.jpg')}}" >
		<div class="container">
	    	<div class="row align-items-center">
	        	<div class="col-sm-6">
	        		
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
            	<div class="single_event">
            		@if(!empty($page->image->path))
                    <div class="course_img">
                        <a href="#">
                            <img src="{{$page->image->path}}" alt="course_img_big">
                        </a>
                        
                    </div>
                    @endif
                    <div class="event_title">
                    	<div class="row align-items-end">
                            <div class="col-md-12">
                            	@if(!empty($page->title))
                    			<h1>{{ $page->title }}</h1>
                    			@endif
                                
                            </div>
                            
                        </div>
                    </div>
                    @if(!empty($page->content))
                    
                    <div class=" default_content entry_content" style="margin-top: 25px;">
                    	<p>
                    		{!! $page->content !!}
                    	</p>
                    </div>
                    @endif
                    
                    
                </div>
            </div>
            <div class="col-lg-4 mt-lg-0 mt-4 pt-3 pt-lg-0">
            	<div class="sidebar">
                    
                	
                    
                    <!-- <div class="widget widget_recent_post">
                    	<h5 class="widget_title">Recent Post</h5>
                        <ul class="recent_post border_bottom_dash list_none">
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_post1.jpg" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <span class="post_date">April 14, 2018</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_post2.jpg" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <span class="post_date">April 14, 2018</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_post3.jpg" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <span class="post_date">April 14, 2018</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> -->
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
