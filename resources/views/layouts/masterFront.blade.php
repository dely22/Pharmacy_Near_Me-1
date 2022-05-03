<!doctype html>
<html class="no-js" lang="ar">

<head>
	<meta charset="utf-8">

	<!--====== Title ======-->
	<title>Pharmacy Near Me</title>

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="{{ asset('Front/assets/images/favicon.png')}}" type="image/png">

	<!--====== Animate CSS ======-->
	<link rel="stylesheet" href="{{ asset('Front/assets/css/animate.css')}}">

	<!--====== Tiny slider CSS ======-->
	<link rel="stylesheet" href="{{ asset('Front/assets/css/tiny-slider.css')}}">

	<!--====== glightbox CSS ======-->
	<link rel="stylesheet" href="{{ asset('Front/assets/css/glightbox.min.css')}}">

	<!--====== Line Icons CSS ======-->
	<link rel="stylesheet" href="{{ asset('Front/assets/css/LineIcons.2.0.css')}}">

	<!--====== Selectr CSS ======-->
	<link rel="stylesheet" href="{{ asset('Front/assets/css/selectr.css')}}">

	<!--====== Nouislider CSS ======-->
	<link rel="stylesheet" href="{{ asset('Front/assets/css/nouislider.css')}}">

	<!--====== Bootstrap CSS ======-->
	<link rel="stylesheet" href="{{ asset('Front/assets/css/bootstrap-5.0.5-alpha.min.css')}}">

	<!--====== Style CSS ======-->
	<link rel="stylesheet" href="{{ asset('Front/assets/css/style.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <style>
        html { direction:rtl;
            font-family:"Droid Arabic Kufi", "Droid Sans", sans-serif;
            font-size:14px;
        }
		a{
			text-decoration: none;
		}
		/* li:hover{
			background-color: var(--main-color);
			color: #fff;
		} */
    </style>

<body>
	<!--====== HEADER PART START ======-->

	@include('includes.FrontHeader')

	<!--====== HEADER PART ENDS ======-->



    @yield('content')


	<!--====== FOOTER PART START ======-->
	@include('includes.FrontFooter')
	<!--====== FOOTER PART ENDS ======-->

	<!--====== BACK TOP TOP PART START ======-->
	<a href="#" class="back-to-top btn-hover"><i class="lni lni-chevron-up"></i></a>
	<!--====== BACK TOP TOP PART ENDS ======-->


	<!--====== Bootstrap js ======-->
	<script src="{{ asset('Front/assets/js/bootstrap.bundle-5.0.0.alpha-min.js')}}"></script>

	<!--====== Tiny slider js ======-->
	<script src="{{ asset('Front/assets/js/tiny-slider.js')}}"></script>

	<!--====== wow js ======-->
	<script src="{{ asset('Front/assets/js/wow.min.js')}}"></script>

	<!--====== glightbox js ======-->
	<script src="{{ asset('Front/assets/js/glightbox.min.js')}}"></script>

	<!--====== Selectr js ======-->
	<script src="{{ asset('Front/assets/js/selectr.min.js')}}"></script>

	<!--====== Nouislider js ======-->
	<script src="{{ asset('Front/assets/js/nouislider.js')}}"></script>

	<!--====== Main js ======-->
	<script src="{{ asset('Front/assets/js/main.js')}}"></script>


</body>

</html>
