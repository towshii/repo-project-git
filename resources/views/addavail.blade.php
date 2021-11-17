<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Add</title>
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
						<div class="logo">
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<form action="add" method="post" id="myform">
									@csrf
									<input type="hidden" name="instructor_id" value="{{$LoggedUserInfo['name']}}
									">
									 <input type="hidden" name="instructor_name" value="{{$LoggedUserInfo['id']}}
									">
									<input type="hidden" name="available" value="yes">
									<label for="day">Select a day of the week</label> 
									<select name="day" id="select" required>
										<option value=""></option>
										<option value="Monday">Monday</option>
										<option value="Tuesday">Tuesday</option>
										<option value="Wednesday">Wednesday</option>
										<option value="Thursday">Thursday</option>
										<option value="Friday">Friday</option>
										<option value="Saturday">Saturday</option>
										<option value="Sunday">Sunday</option>
									</select><br>
									<label for="part_of_the_day">Select what part of the day</label> 
									<select name="part_of_the_day" id="select"required>
										<option value=""></option>
										<option value="Morning">Morning</option>
										<option value="Afternoon">Afternoon</option>
										<option value="Evening">Evening</option>
									</select><br>
									<label for="time">Select what time</label> 
									<input type="time" name="time" required placeholder="time"required id="select" style="color:rgb(53, 53, 53);border-radius:10px;">
								  <br> <br>
								   <textarea name="note" id="select" cols="30" rows="3" value="optional">optional note(this field can be empty)</textarea> 
								   <input type="submit" value="Add" style="
								   font-size: 12px;
								   text-transform: uppercase;
								   letter-spacing: 2.5px;
								   font-weight: 500;
								   color: rgb(54, 54, 54);
								   background-color: rgba(58, 58, 58, 0.438);
								   border: none;
								   border-radius: 15px; margin-top:1.5em;
								  " id="hh">
									
									
								</form>
							   
								
							</div>
						</div>
						<nav>
							<ul>
								
								<li><a href="/mySchedules">return</a></li>
							
								
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
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
