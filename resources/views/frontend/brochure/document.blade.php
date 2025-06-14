@extends('frontend.layouts.app')
@section('content')
<!-- START SECTION BREADCRUMB -->
	<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/jcb8.jpg')}}" >
		<div class="container">
	    	<div class="row align-items-center">
	        	<div class="col-sm-6">
	            	<div class="page-title">
	            		<h1>Brochure/flyer</h1>
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
 @if(!empty($document))
	<section>
		<div class="container">
			<div class="row justify-content-center">
	        	<div class="col-xl-6 col-lg-8">
	            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
	                    <div class="heading_s1 text-center">
	                        <h2 class="font_style1">Brochure/flyer</h2>
	                    </div>
	                    
	                    <div class="small_divider"></div>
	                </div>
	            </div>
        	</div>
	    	<div class="row">
	        	<div class="col-lg-12">
	            	<div class="single_post">                   
	                    <div class="comment-area">
	                        
	                        <ul class="list_none comment_list">
	                           
		                        	@foreach($document as $data)
		                            <li class="comment_info">
		                                <div class="d-flex">
		                                    
		                                    <div class="comment_content">
		                                        <div class="d-flex">
		                                            <div class="meta_data">
		                                                <h6>{{$data->title}}</h6>
		                                                
		                                            </div>
		                                            <div class="ml-auto">
		                                                <a href="{{URL::asset("/downloads/$data->path")}}" class="comment-reply btn btn-default btn-sm" target="_blank">Download</a>
		                                            </div>
		                                        </div>
		                                        
		                                    </div>
		                                </div>
		                            </li>
		                            @endforeach
		                           
	                        </ul>
	                        
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 mt-lg-0 mt-4 pt-3 pt-lg-0">
	            	
	                    
	              
	            </div>
	        </div>
	    </div>
	</section>
 @endif
	
	<!-- <section>
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="single_post">
						<div class="comment-area">                       
	                        <ul class="list_none comment_list">
	                        	@if(!empty($document))
	                        	@foreach($document as $data)
	                            <li class="comment_info">
	                                <div class="d-flex">
	                                    
	                                    <div class="comment_content">
	                                        <div class="d-flex">
	                                            <div class="meta_data">
	                                                <h6>{{$data->title}}</h6>
	                                                
	                                            </div>
	                                            <div class="ml-auto">
	                                                <a href="#" class="comment-reply btn btn-default btn-sm">Download</a>
	                                            </div>
	                                        </div>
	                                        
	                                    </div>
	                                </div>
	                            </li>
	                            @endforeach
	                            @endif
	                            
	                        </ul>
                        
                    	</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
	</section> -->
	@endsection