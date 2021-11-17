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
								<li><a href="Instructor">Student Requests</a></li>
								<li><a href="mySchedules">My available schedules</a></li>
								<li><a href="{{route('auth.logout')}}">Logout</a></li>
								
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
						<div class="content">
							<div class="inner">
								
								<p>Requests for consultation are displayed here.  You can view the details, accept  or deny it.</p>
								

								

							</div>
							<div style=" display: flex;
							flex-wrap: wrap;
							justify-content: center;
							max-width: 1200px;
							margin-block: 2rem;
							gap: 2rem;">
								@foreach($req as $reqq)
								<div style="border:1px solid;width:20em;">
									<header>
										<span class="date">Request From</span>
										<h2><a href="#">{{$reqq['student_name']}}</a></h2>
									</header>
									<br>
									<span class="date">Requesting for consultation on:</span>
									<h1>{{$reqq['day']}} {{$reqq['part_of_the_day']}} {{$reqq['time']}}</h1>
									<h2 ></h2>
									<h2 style="text-align:center;"> </h2>
									<span class="date">Subject:</span>
									<h4 style="text-align:center;"> {{$reqq['subject']}}</h4>
									<span class="date">Meeting Place:</span>
									<h4 style="text-align:center;"> {{$reqq['meeting_place']}}</h4>
									<span class="date">Message:</span>
									<h4 style="text-align:center;"> {{$reqq['message']}}</h4>
									
									@if($reqq->status=='accepted')
									<span class="date">Status:</span>
									<h2 style="text-align:center;color:green;"> {{$reqq['status']}}</h2>
									<span class="date">You can now meet with the students and conduct the consultation.</span>
									<ul class="actions special">
									<li><a href={{"consultdone/".$reqq['id']."/".$reqq['avail_id']}} class="button" >Mark as done</a></li>
									<li><a href={{"cancelreq/".$reqq['id']."/".$reqq['avail_id']}} class="button">Cancel</a></li>
									</ul>
									@elseif($reqq->status=='rejected')
									<span class="date">Status:</span>
									<h3 style="text-align:center;color:rgb(161, 37, 37);"> {{$reqq['status']}}</h3>
										<ul class="actions special">
									<li><a href={{"cancelrej/".$reqq['id']}} class="button">undo</a></li>
										<li><a href={{"deletereq/".$reqq['id']}} class="button">Delete this request</a></li>
									</ul>
									@elseif($reqq->status=='consultation done')
									<h3 style="text-align:center;color:#278f24;"> {{$reqq['status']}}</h3>
									<a href={{"deletereq/".$reqq['id']}} class="button">Delete record</a>
									@else
									<span class="date">Status:</span>
									<h3 style="text-align:center;color:#c112c7;"> {{$reqq['status']}}</h3>
									<ul class="actions special">
										<li><a href={{"updatereq/".$reqq['id']."/".$reqq['avail_id']}} class="button">Accept</a></li>
										<li><a href={{"rejectreq/".$reqq['id']}} class="button">Reject</a></li>
									</ul>	
									@endif
									
								</div>
								@endforeach
							</div>
							
							{{ $req->links() }}
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
