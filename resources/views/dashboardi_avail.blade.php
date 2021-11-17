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
								
								<p>This is the list of your available schedules that are displayed for the students.</p>
								<a href="/add" style="background: #6e6e6e27;padding-top:.4em;padding-bottom:.4em;margin-bottom:1em;padding-left:2em;padding-right:2em;;border-radius: 50px;">Add</a> <br>

<table border="2" style="margin-top:1em;">
								
	<tr>
	
		
		<td>Available Day</td>
		<td>Part of the day</td>
		<td>Time</td>
	</tr>
   @foreach($avail as $available)
   
   <tr>

	
	<td>{{$available['day']}}</td>
	<td>{{$available['part_of_the_day']}}</td>
	<td>{{$available['time']}}</td>
	<td>
		<a href={{"delete/".$available['id']}}>DELETE</a>
		<a href={{"edit/".$available['id']}} id="myBtn">EDIT</a>
		
	</td>
   
</tr>

   @endforeach
  
</table>

							</div>
							{{ $avail->links() }}
						</div>
						
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
						

						<!-- Work -->
							<article id="bout">
								<h2 class="major">About the system</h2>
								<span class="image main"><img src="images/pic02.jpg" alt="" /></span>
								<p>The first step of using the system is to create your account and select the proper account type.</p>
								<p>Student - On a student account, the student can view all the instructors and thier available schedules. Students can then request a consultation schedule.</p>
								<p>Teacher - On a teachers account, a teacher can edit add and delete his/her available schedules. This schedules are then displayed on a student account. A teacher can accept or deny a request from a student. </p>
							</article>

						<!-- About -->
							

						<!-- Contact -->
							
						<!-- Elements -->
							

					</div>

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
