@extends('frontend.layouts.app')
@section('content')
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/jcb8.jpg')}}" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h1>Partners</h1>
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
                                    <h1>Partners</h1>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="teacher_desc mt-4 mt-md-0">
                                    <p>The Academy collaborates with government, private and non-government organization to meet the common goal in the sector of skills development and employment. </p>
                                </div>
                            </div>
                        </div>    
                        
                    </div>
                    
                </div>
                @if(!empty($logogovernment))
                <div class="row industrial_row">
                    <div class="container">
                        <div class="row">
                            <h3 class="partner_header">Our Government Partners</h3>                           
                        </div>
                        <div class="row">
                            @foreach($logogovernment as $data)
                            <div class="col-lg-3 col-sm-4">
                                <div class="box_counter counter_style1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                                    <div class="counter_icon">
                                        <img  src="{{$data->image->path}}" alt="team1">

                                    </div>
                                    <div class="team_title radius_lbrb_10 text-center">
                                        
                                        @if(!empty($data->sub_description))
                                        <span>{!! $data->sub_description!! }</span>
                                        @endif
                                    </div>
                                </div>
                                
                            </div>
                            @endforeach
                            
                        </div>
                        
                        
                    </div>
                    

                    
                </div>
                @endif

                @if(!empty($logofund))
                <div class="row industrial_row">
                    <div class="container">
                        <div class="row">
                            <h3 class="partner_header">Our Funding Partners</h3>                           
                        </div>
                        <div class="row">
                            @foreach($logofund as $data)
                            <div class="col-lg-3 col-sm-4">
                                <div class="box_counter counter_style1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                                    <div class="counter_icon">
                                        <img  src="{{$data->image->path}}" alt="team1">

                                    </div>
                                    <div class="team_title radius_lbrb_10 text-center">
                                        
                                        @if(!empty($data->sub_description))
                                        <span>{!! $data->sub_description!! }</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        
                        
                    </div>
                    

                    
                </div>
                @endif

                @if(!empty($logoimplement))
                <div class="row industrial_row">
                    <div class="container">
                        <div class="row">
                            <h3 class="partner_header">Our Implementing Partners</h3>                           
                        </div>
                        <div class="row">
                            @foreach($logoimplement as $data)
                            <div class="col-lg-3 col-sm-4">
                                <div class="box_counter counter_style1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                                    <div class="counter_icon" >
                                        <img  src="{{$data->image->path}}" alt="team1" >

                                    </div>
                                    <div class="team_title radius_lbrb_10 text-center">
                                        
                                        @if(!empty($data->sub_description))
                                        <span>{!! $data->sub_description!! }</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        
                        
                    </div>
                    

                    
                </div>
                @endif
                
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