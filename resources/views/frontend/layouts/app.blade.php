<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="Anil z" name="author">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Eduglobal - Education & Courses HTML Template">
	<meta name="keywords" content="academy, course, education, elearning, learning, education html template, university template, college template, school template, online education template, tution center template">

	<!-- SITE TITLE -->
	<title> Welcome to MAW Skills Academy</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/mawlogo.png')}}">
	<!-- Animation CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">	
	<!-- Latest Bootstrap min CSS -->
	<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/sweetalert2.css') }}">
	<link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
	

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet"> 
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
 	<!-- Icon Font CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
	<!-- FontAwesome CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
	<!--- owl carousel CSS-->
	<link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.theme.default.min.css')}}">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">


	<!-- Style CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
	<link rel="stylesheet" id="layoutstyle" href="{{asset('assets/color/theme.css')}}">

	<script>
	var sc_project=11981757; 
	var sc_invisible=1; 
	var sc_security="35d2687e"; 
	var sc_https=1; 
	</script>
	<script src="../../../www.statcounter.com/counter/counter.js" async></script>

</head>
<body>
	<div id="preloader">
	    <span class="spinner"></span>
	    <div class="loader-section section-left"></div>
	    <div class="loader-section section-right"></div>

	</div>
	


	<div >
	   	@include('frontend.layouts.partials.header')
	    @include('frontend.layouts.partials.menubar')

	    @yield('content')

	    @include('frontend.layouts.partials.footer')
	    <!-- Load Facebook SDK for JavaScript -->
      		<div id="fb-root"></div>
	        		<script>
				        window.fbAsyncInit = function() {
				          FB.init({
				            xfbml            : true,
				            version          : 'v8.0'
				          });
				        };

				        (function(d, s, id) {
				        var js, fjs = d.getElementsByTagName(s)[0];
				        if (d.getElementById(id)) return;
				        js = d.createElement(s); js.id = id;
				        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
				        fjs.parentNode.insertBefore(js, fjs);
				      }(document, 'script', 'facebook-jssdk'));
			    	</script>

	      <!-- Your Chat Plugin code -->
	      <div class="fb-customerchat"
	        attribution=setup_tool
	        page_id="102428581395086">
	      </div>
	</div>
	<!-- Latest jQuery --> 
	<script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script> 
	<!-- jquery-ui --> 
	<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
	<!-- popper min js --> 
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<!-- Latest compiled and minified Bootstrap --> 
	<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> 
	<!-- owl-carousel min js  --> 
	<script src="{{asset('assets/owlcarousel/js/owl.carousel.min.js')}}"></script> 
	<!-- magnific-popup min js  --> 
	<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script> 
	<!-- waypoints min js  --> 
	<script src="{{asset('assets/js/waypoints.min.js')}}"></script> 
	<!-- parallax js  --> 
	<script src="{{asset('assets/js/parallax.js')}}"></script> 
	<!-- countdown js  --> 
	<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script> 
	<!-- jquery.counterup.min js --> 
	<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
	<!-- imagesloaded js --> 
	<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
	<!-- isotope min js --> 
	<script src="{{asset('assets/js/isotope.min.js')}}"></script>
	<!------ For Popup images -------->
	<script src="{{ asset('js/sweetalert2.min.js') }}"></script>

	<!-- jquery.parallax-scroll js -->
	<script src="{{asset('assets/js/jquery.parallax-scroll.js')}}"></script>
	<script src="{{asset('assets/js/lightbox.min.js')}}"></script>
	
 

	<!-- scripts js --> 
	<script src="{{asset('assets/js/scripts.js')}}"></script>
	@stack ('scripts')

</body>
</html>