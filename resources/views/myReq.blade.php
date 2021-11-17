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
								
								<p>View the current status of your requested consultations here. Always check this tab, your instrcutor might already accepted your request.</p>
								

							
								
									  
							</div>
							<div style=" display: flex;
							flex-wrap: wrap;
							justify-content: center;
							max-width: 1200px;
							margin-block: 2rem;
							gap: 2rem;">
@foreach($req as $reqme)
<div style="border:1px solid;width:20em;">
		<header>
		
			<span class="date">Consultation Request for:</span>
			<h1><a href="#">{{$reqme['instructor_name']}}</a></h1>

		</header>
		
		<span class="date">On:</span>
		 <h2>{{$reqme['day']}} {{$reqme['part_of_the_day']}}</h2>
		 <h1>{{$reqme['time']}}</h1>
		 
		 @if($reqme->status=='accepted')
		<span class="date">Request Status:</span>
		 <h2 style="color:green;"> {{$reqme['status']}}</h2>
		  <span class="date">You can now meet with your instructor</span>
		 @elseif($reqme->status=='rejected')
		 <span class="date">Request Status:</span>
		 <h2 style="color:red;"> {{$reqme['status']}}</h2>
		 @else
		 <span class="date">Request Status:</span>
		 <h2 style="color:#6a2999;"> {{$reqme['status']}}</h2>
		<ul class="actions special">
		
			<li><a href={{"cancel/".$reqme['id']."/".$reqme['avail_id']}} class="button">Cancel the consultation request</a></li>
		</ul>
		 @endif
		
	</div>

@endforeach
							</div>
						
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

