@extends('frontend.layouts.app')
@section('content')
<!-- START SECTION BANNER -->


 
<section class="banner_section p-0 full_screen" >
    <div id="carouselExampleFade" class="banner_content_wrap carousel slide carousel-fade" data-ride="carousel" >
        <div class="carousel-inner" >
            @if(!empty($slider))
            @php
            $count=0;
            @endphp
            @foreach($slider as $slide)

            <div class="carousel-item @if($count==0) active @endif background_bg" data-img-src="{{asset($slide->image->path)}}">
                <div class="banner_slide_content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-9 col-sm-12 text-center">
                                @if(!empty($slide->title))
                                <div class="banner_content animation text_white"data-animation="zoomIn" data-animation-delay="0.8s" >
                                    <h2 class="font-weight-bold animation slider_header " data-animation="fadeInDown" data-animation-delay="0.6s" style="padding: solid 1px rgba(0,0,0,0.3);" >{{$slide->title}}</h2>
                                    
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @php
                $count++;
                @endphp

            </div>
           

            @endforeach
                
            @endif
        </div>
        <div class="carousel-nav carousel_style2">
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <i class="ion-chevron-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <i class="ion-chevron-right"></i>
            </a>
        </div>
    </div>
</section>    


 

<!-- START SECTION services -->
<section class="bg_white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <h2>Training Today for Tomorrow's In-demand Job </h2>
                </div>
            </div>
        </div>
        @if(!empty($program))
        <div class="row justify-content-center">
            @php
            $count=2;
            @endphp
            @foreach($program as $data)
            <div class="col-lg-4 col-md-6">
                <div class="content_box box_shadow1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.0{{$count}}s">
                    <div class="content_img content-img radius_ltrt_10">
                        <a href="#">
                            <img src="{{asset($data->image->path)}}" alt="blog_small_img1">

                            <div class="link_blog">
                                <span class="ripple"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="blog_content bg-white blog_text">
                        @if(!empty($data->title))
                        <h5 class="blog_title" style="text-align: center;">{{$data ->title}}</h5>
                        @endif
                        @if(!empty($data->sub_description))
                        <p>{!! str_limit($data->sub_description ,100, '&raquo;') !!}</p>
                        @endif
                        <div class="enroll_btn">
                            <a href="{{route('programs',$data->slug)}}" class="btn btn-default btn-sm">Read More</a>
                        </div>
                    </div>

                </div>
            </div>
            @php 
            $count++;
            @endphp
            @endforeach
            
        </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                    <div class="medium_divider"></div>
                    <a href="{{route('programs')}}" class="btn btn-default">Other Training Courses <i class="ion-ios-arrow-thin-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION SERVICES -->

<!-- START SECTION EVENT -->
@if(!empty($post))
<section class="bg_gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        
                        <h2>Why MAW Academy?</h2>
                    </div>
                    <p>The MAW Academy provides individuals with knowledge, hands-on practical experience and skills necessary for them to attain rewarding careers in the trained occupations; ensuring industry collaboration for demand-driven training and successful placements.</p>
                </div>
            </div>
        </div>
        @if(!empty($post))

        @php
        $count=2;
        $color='';


        if($count==2){

        $color='bg_default';
        }

        elseif($count==3){
        $color='bg_light_green';

        }



        elseif($count==4){

        $color='bg_danger';

        }

        else{

        $color='bg_danger';
        }


        @endphp
        <div class="row event_list">
            <div class="col-12">
                <div class="carousel_slider owl-carousel owl-theme" data-margin="10" data-loop="true" data-autoplay="true" data-nav="true" data-dots="false" data-responsive='{"0":{"items": "1"}, "767":{"items": "2"}, "1199":{"items": "3"}}'>
                    @foreach($post as $post)
                    <div class="item">                       
                        <div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay=" 0.0{{$count}}s">
                            <div class="box_icon bg_danger mb-3">
                                <img src="{{asset($post->image->path)}}" />
                            </div>
                            <div class="intro_desc card-desc">
                                <h5>
                                    @if(!empty($post->title))
                                    {{ $post->title}}
                                    @endif
                                </h5>

                                <p>
                                    @if(!empty($post->content))
                                    {!! $post->content !!}
                                    @endif                                    
                                </p>
                            </div>
                        </div>
                                                                                       
                    </div>
                    @php
                    $count++;
                    @endphp
                    @endforeach    
                   
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
@endif
@if(!empty($history))
<!-- START SECTION ABOUT -->
<section class="bg_gray small_pt small_pb overflow-hidden">
    <div class="container-fluid p-0">
        <div class="row no-gutters align-items-center">
            <div class="col-md-6">
                <div class="box_shadow1 bg-white overlap_section padding_eight_all">
                    <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
                    
                    <div class="heading_s1"> 
                        <h2>About us</h2>
                    </div>
                      
                      @if(!empty($history ->content))
                      <p>
                        {!! $history ->content !!}
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
                <a href="{{$history->url}}" class="video_play video_popup"> <!--class=" video_play"-->
                    <span class="ripple"><i class="ion-play ml-1"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>
</section>
@endif


<!-- End About section -->


<!-- START SECTION CLIENT LOGO -->
@if(!empty($client))
<section class=" client_section" style="margin-top: 40px;">
    <div class="container-fluid">
       <div class="row  justify-content-center">
           <div class="col-xl-6 col-lg-8">
               <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                <div class="heading_s1 text-center">
                    <h2>Our Clients</h2>
                </div>
                <p></p>
                <div class="small_divider"></div>
            </div>
        </div>
    </div>
    <div class="row">

       <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.01s">


           @php
           $count=0;
           @endphp
           <div class=" carousel_slider owl-carousel owl-theme" data-margin="15" data-loop=" true " data-autoplay="true" data-dots="false" data-responsive='{"0":{"items": "2"}, "380":{"items": "3"}, "600":{"items": "4"}, "1000":{"items": "5"}, "1199":{"items": "6"}}'>

            @foreach($client as $data)
            <div class="item  ">
               <img class="client_img"  src="{{asset($data->image->path)}}" alt="cl_logo"/>
            </div>

            @php
            $count++;
            @endphp
            @endforeach  
        </div>





    </div>        


</section>
@endif
<!-- END SECTION CLIENT LOGO -->

@endsection

@push('scripts')


<script type="text/javascript">

    {
        

        var steps = [
        @foreach ($popuphome as $data)
        {
            @if(!empty($data->image->path))
            html: "<img src='{{ asset($data->image->path)}}'>"
            @endif

        },
        @endforeach

        ];


        swal.queue(steps).then(function (result) {
            swal.resetDefaults()

        }, function () {
            swal.resetDefaults()
        })

    }


    new Vue({
        el: '#app',
        data: {
            principal: 0,
            rate: 0,
            loan: 0,
            newRate: 0,
            up: 0,
            down: 0
        },
        computed: {
            result: function () {
                const p = this;
                Vue.config.productionTip = false;
                p.newRate = p.rate / 12 / 100;
                p.up = Math.pow((1 + p.newRate), p.loan);
                p.down = p.up - 1;
                return parseFloat(p.principal * p.newRate * p.up / p.down).toFixed(2);
            }
        }
    });
    $(window).load(function () {
        $('#myModal').modal('show');
    });

</script>


@endpush