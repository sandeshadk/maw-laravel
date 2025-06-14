<!-- END SECTION ABOUT -->
	<footer class="bg_blue_dark footer_dark">
		<div class="top_footer">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-4 col-sm-8 mb-4 mb-lg-0">
	                	<h5 class="widget_title">MAW Skills Academy </h5>
	                	
	                  	<h6 class="widget_title">Our locations</h6>

	                    
	                    <ul class="contact_info contact_info_light list_none">
	                    	
	                   
	                        @if(!empty(footerlocations()))
	                        @foreach(footerlocations() as $data)
	                        <li>
	                            <i class="fa fa-map-marker-alt" style="margin-bottom: 30px;"></i>
	                            <address class="address-pd">{!! $data ->address !!}</address>
	                        </li>
	                        @endforeach
	                        @endif
	                    </ul>
	                </div>
	                
	                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
	                    <h6 class="widget_title">Quick Links</h6>
	                    
	                    <ul class="footer-list padding-md" >
	                    		<li style="padding-bottom: 10px;"><a href="{{route('homepage')}}" class="footer-list">MAW Academy</a></li>
	                    		@foreach(footermenu() as $menu)
                                <li style="padding-bottom: 10px;"><a href="{{url($menu->url)}}" class="footer-list">{{$menu->name}}</a></li>
                                @endforeach
                                <li style="padding-bottom: 10px;"><a href="{{route('document')}}" class="footer-list">Brochure/flyer</a></li>

                        </ul>
                    </div>
	                	
	                <div class="col-lg-4 col-md-6">
	                    <a href="{{route('programs')}}"><h6 class="widget_title">Trainings</h6></a>
	                    <ul class="recent_post border_bottom_dash list_none">
	                    	@foreach(footer() as $footer)
                        	<li>
                            	<div class="post_footer">
                                	<div class="post_img img_post">
                                    	<a href="{{route('programs',$footer->slug)}}"><img src="{{asset($footer->image->path)}}" alt="trainings"></a>
                                    </div>
                                    @if(!empty($footer->title))
                                    <div class="post_content">
                                    	<h6><a href="{{route('programs',$footer->slug)}}">{{$footer->title}}</a></h6>
                                    </div>
                                    @endif
                                </div>
                            </li>
                            @endforeach
                           
                        </ul>
	                
	                   

	                    <h6 class="widget_title" style="margin-top: 30px;">Connect Socially </h6>
	                    <ul class="list_none social_icons radius_social social_white social_style1">
	                    	 <li><a href="{{setting('facebook')}}"><i class="ion-social-facebook"></i></a></li>
	                         <li><a href="{{setting('linkedin')}}"><i class="ion-social-linkedin"></i></a></li>
	                         <!-- <li><a href="{{setting('youtube')}}"><i class="ion-social-youtube-outline"></i></a></li>
	                         <li><a href="{{setting('instagram')}}"><i class="ion-social-instagram-outline"></i></a></li> -->
	                    </ul>

	                    <h6 class="widget_title " style="margin-top: 30px;">In partnership with: </h6>
	                    <ul class="list_none social_icons radius_social social_white social_style1">
	                    	 <a href="http://seepnepal.com/" target="_blank"><li ><img style="width: 100px; height: 60px; margin-right: 10px;" src="{{asset('assets/images/seep.png')}}"></li></a>
	                         <a href="http://seepnepal.com/" target="_blank"><li ><img style="width: 60px; height: 60px;" src="{{asset('assets/images/UK AID.PNG')}}"></li></a>
	                         
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="bottom_footer bg_blue_dark2">
	    	<div class="container">
	        	<div class="row align-items-center">
	            	<div class="col-md-6">
	                	<p class="copyright m-md-0 text-center text-md-left">© All Rights Reserved by MAW Skills Academy.</p>
	                </div>
	                <div class="col-md-6">
	                	<ul class="list_none footer_link text-center text-md-right">
	                    	<li><a href="https://www.accessworld.net/">Designed by AWT</a></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </div>
	</footer>
<!-- END FOOTER -->
<a href="#" class="scrollup" style="display: none;"><i class="ion-chatbubbles"></i></a> 
<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>


