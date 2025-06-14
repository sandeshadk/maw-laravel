@extends('frontend.layouts.app')
@section('content')
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/jcb8.jpg')}}" >
		<div class="container">
	    	<div class="row align-items-center">
	        	<div class="col-sm-6">
	            	<div class="page-title">
	            		<h1>Hire Graduates</h1>
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

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                
                <div class="row industrial_row">
                    <div class="single_event">
                    
                        <div class="event_title">
                            <div class="row align-items-end">
                                <div class="col-md-8">
                                    @if(!empty($page->title))
                                    <h2>{{$page->title}}</h2>
                                    @endif                                                                
                                </div>
                                
                            </div>
                        </div>
                        @if(!empty($page->content))
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="teacher_desc mt-4 mt-md-0">
                                    <p> {!! $page->content !!}</p>
                                </div>
                            </div>
                        </div>    
                        @endif                    
                    
                    </div>
                    
                </div>
                <div class="row">
                    <ul class="list_none header_list border_list ml-1">
                        <li><a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#Login1">Hire Graduates</a></li>
                    </ul>
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



<div class="modal fade lr_popup" id="Login1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-0 newmodal-content " >
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="row no-gutters">
                    
                    <div class="col-lg-12"> 
                        <div class="padding_eight_all new_padding">
                            <div class="heading_s1 mb-3 apply_header news1 nav-link" >
                                <h4 >Hire Graduates</h4>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="login" role="tabpanel">
                                    
                                    <form  class="login ">
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="firstname" placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="lastname" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" required=""  name="businessname" placeholder="Name of Business">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" required=""  name="businessaddress" placeholder="Business Address">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="phone" placeholder="Phone No.">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" required="" class="form-control" name="number" placeholder="No of Graduates" min="1" max="100">
                                        </div>
                                        
                            
                                        <div class="form-group col-12">  
                                                Graduate:
                                                        @php
                                                        $count=0;
                                                        @endphp
                                                        @foreach($hireform as $data)
                                                        @if(!empty($data->graduate))
                                                        <input type="checkbox" @if($count==1) style="margin-left: 73px;" @endif >

                                                        
                                                        <label for="vehicle1" style="color: #666666;"> {{$data-> graduate}}</label><br> 
                                                        
                                                        @endif
                                                        @php
                                                        $count++;
                                                        @endphp
                                                        @endforeach

                                        </div>
                                        <!-- <div class="form-group">
                                            <input type="number" required="" class="form-control" name="number" placeholder="No of Graduates" min="1" max="5">
                                        </div -->
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default btn-block" name="hire">Hire</button>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
@push('scripts')
<script>
    $(function() {
    var $a = $(".tabs li");
    $a.click(function() {
        $a.removeClass("active");
        $(this).addClass("active");
    });
});

    
</script>

@endpush