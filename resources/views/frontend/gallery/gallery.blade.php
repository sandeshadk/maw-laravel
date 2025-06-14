@extends('frontend.layouts.app')
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
	                    
	                  </ol>
	                </nav>
	            </div>
	        </div>
	    </div> 
</section>

<!-- START SECTION GALLERY -->
<section class="bg_linen">
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
        @if(!empty($gallery))
        <div class="row">
            <div class="col-md-12">
                <ul class="grid_container gutter_medium grid_col3 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                    <li class="grid-sizer"></li>
                    <!-- START PORTFOLIO ITEM -->
                    
                    @foreach($gallery as $data)
                        <li class="grid_item library campus">
                            <div class="gallery_item radius_all_10">
                                

                                <a href="#" class="image_link" >
                                    <img src="{{asset($data->image->path)}}" alt="image" style="width: 350px; height: 234px;">
                                </a>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a href="{{asset($data->image->path)}}" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                    </div>
                                    @if(!empty($data->title))
                                    <div class="text_holder text_white">
                                   		<h5>{{$data->title}}</h5>
                                    </div>
                                    @endif
    							</div>
                            </div>
                            
                        </li>




                    @endforeach
                   
                    <!-- END PORTFOLIO ITEM -->
                   
                </ul>
            </div>
        </div>
        @endif
    </div>
</section>
<!-- END SECTION GALLERY -->
@endsection