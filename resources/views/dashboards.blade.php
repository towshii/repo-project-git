<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{{$LoggedUserInfo['name']}}'s Account</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets1/css/main.css" />
		<link href="{{ asset('assets1/css/main.css') }}" rel="stylesheet" type="text/css" >
		<noscript><link rel="stylesheet" href="assets1/css/noscript.css" /></noscript>
		<noscript><link rel="stylesheet" href=" {{ asset('assets1/css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<nav>
							<ul>
								<li><a href="/student">Available Schedules</a></li>
								<li><a href="/myRequests">My Requested Schedules</a></li>
								<li><a href="{{route('auth.logout')}}">Logout</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
						<div class="content">
							<div class="inner">
								
								<p>This is where the available schedule of instructors are displayed. Request a consultation by clicking the request button.</p>
								

								<form action="searchh" method="post">
									@csrf
										  <input type="text" name="insnem" placeholder="Search for a teacher/instructor">
										  <input type="submit" value="search" style="margin-top:1.5em;margin-bottom:1.5em;" >
										  <a href="/student" class="button" style="margin-bottom:1.5em;margin-bottom:1.5em;">Reset Search</a>
									  </form>
								
									  
							</div>
							<div style=" display: flex;
							flex-wrap: wrap;
							justify-content: center;
							max-width: 1200px;
							margin-block: 2rem;
							gap: 2rem;">
@foreach($avail as $available)
<div style="border:1px solid;width:20em;">
<header>
<span class="date">Instructor</span>
<h2><a href="#">{{$available['instructor_id']}}</a></h2>
</header>
<br>
<span class="date">Available on</span>
<h1>{{$available['day']}}</h1>
<h2>{{$available['part_of_the_day']}}</h2>
<p style="text-align:center;">Available Time: {{$available['time']}}</p>
<ul class="actions special">
@if($available->available=='yes')

<li><a href={{"request/".$available['id']}} class="button">Request for a consultation</a></li>
@else
<h3 style="color:rgb(184, 47, 47);">This schedule is currently unavailable</h3>
@endif
</ul>
</div>
@endforeach
							</div>
							{{$avail->links()}}
						</div>
						
					</header>

				<!-- Main -->
				
				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Consultation System. </a></p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			{{-- <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script> --}}

			<script type="text/javascript" src="{{ asset('assets1/js/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets1/js/browser.min.js') }}"></script>
			<script type="text/javascript" src="{{ asset('assets1/js/breakpoints.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets1/js/util.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets1/js/main.js') }}"></script>

	</body>
</html>
