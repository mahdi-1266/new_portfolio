<!doctype html>
<html lang="en">

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!------ Favicon Icon ------>
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/images/logo/favicon-32x32.png') }}">

	<!-- SITE TITLE -->
	<title>Mahdi Alizada Portfolio Website</title>

	<!------ Google Fonts ------>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300i,400,400i,500,600,700,800" rel="stylesheet"/>
	
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/brands.min.css" integrity="sha512-WxpJXPm/Is1a/dzEdhdaoajpgizHQimaLGL/QqUIAjIihlQqlPQb1V9vkGs9+VzXD7rgI6O+UsSKl4u5K36Ydw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="{{ asset('frontend/assets/fonts/font-awesome.min.css') }}" rel="stylesheet"/>
	<link href="{{ asset('frontend/assets/fonts/themify-icons.css') }}" rel="stylesheet"/>
  

	<!------ CSS Styles ------>
	<link rel="stylesheet" href="{{ asset('backend/assets/css/all.min.css') }}">
	<link href="{{ asset('frontend/assets/fonts/etline.css') }}" rel="stylesheet"/>
	<link href="{{ asset('frontend/assets/css/plugins.css') }}" rel="stylesheet"/>
	<link href="{{ asset('frontend/assets/css/lightbox.min') }}.css" rel="stylesheet"/>
	<link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet"/>
	<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet"/>


	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body data-spy="scroll" data-offset="80">

	<!------ Cursor Start ------>
	<div id="cursor"></div>
	<!------ Cursor End ------>

		<!-- START PRELOADER -->
			<div class="preloader">
				<div class="spinner">
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div>
			</div>
		<!-- END PRELOADER -->
		
		<!-- START NAVBAR -->
    @include('frontend.body.header')
		<!-- END NAVBAR -->			
		
		<!-- START BANNER-SHOW -->
		@yield('frontend')
		<!-- END BANNER-SHOW -->

    <!-- ______ Footer Start ______ -->
    @include('frontend.body.footer')
    <!-- ______ Footer End ______ -->
		

		<!-- Start Latest jQuery -->
			<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/modernizr-2.8.3.min.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/jquery.nav.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/jquery.inview.min.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/animated-headline.js') }}"></script>			
			<script src="{{ asset('frontend/assets/js/lightbox.min.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/slick-nav.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/form-contact.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/scrolltopcontrol.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
			<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
		<!-- End Latest jQuery -->
		
	</body>
</html>		