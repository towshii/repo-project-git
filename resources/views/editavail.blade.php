<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Edit Schedule</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		
	<style>
		body, input, select, textarea {
		font-family: "Merriweather", Georgia, serif;
		font-weight: 300;
		font-size: 1rem;
		
	}
		#myform{
	border-radius: 58px;
	background: #ffffff;
	box-shadow:  -13px 13px 26px #7b7b7b,
             13px -13px 26px #ffffff;
	width: 20em;
	
	text-align: center;
	padding: 1em;
	padding-top: 2em;
	padding-bottom: 2em;
	margin:5em;
	display:flex;
	flex-direction: column;
	justify-content: center;
	justify-items: center;
	align-items: center;
}
#myform input[type="text"],input[type="password"],input[type="email"]{
color: rgb(82, 82, 82);
border:none;
border-bottom: solid grey 1px;
width: 13em;
margin: 1em;
outline:none;
height:3em;
}
#myform input[type="submit"]{
	margin-top: 2em;
	padding: 1.3em 3em;
 font-size: 12px;
 text-transform: uppercase;
 letter-spacing: 2.5px;
 font-weight: 500;
 color: rgb(54, 54, 54);
 background-color: #fff;
 border: none;
 border-radius: 45px;
 box-shadow: 5px 5px 10px #797979,
             -5px -5px 10px #ffffff;
	}
	#myform input[type="submit"]:hover{
		-webkit-transform: translate(0px,5px);
 -ms-transform: translate(0px,5px);
 transform: translate(0px,5px);
 border-bottom: 1px solid #606863;
	}
	#select{
		color: rgb(82, 82, 82);
border:none;
border-bottom: solid grey 1px;
width: 13em;
margin: 1em;
	}
	#time{
		border:none;
border-bottom: solid grey 1px;
width: 13em;
outline:none;

	}
	</style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
		
			<div id="wrapper" class="fade-in">
				
				<!-- Intro -->
					<!-- <div id="intro">
						
						<h1>
						Consultinator</h1>
					
					</div> -->

				<!-- Header -->
					<!-- <header id="header">
						<a href="index.html" class="logo">Massively</a>
					</header> -->

				<!-- Nav -->
				

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								
								<header class="major" style="display:flex;justify-content:center;">
									
									
									<form action="/update" method="post" id="myform">
										
										@csrf
										<input type="hidden" name="id" value="{{$availability['id']}}">
										<label for="daay" style="background-color:rgb(47, 179, 47);padding:.5em;color:rgb(255, 255, 255);">Edit Day</label> <p style="background-color:rgb(47, 179, 47);padding:.5em;color:rgb(255, 255, 255);">Current: {{$availability['day']}}</p>
										<select name="daay" id="select" required  style="border-bottom-color:green;">
											<option value="">Change here</option>
											<option value="Monday">Monday</option>
											<option value="Tuesday">Tuesday</option>
											<option value="Wednesday">Wednesday</option>
											<option value="Thursday">Thursday</option>
											<option value="Friday">Friday</option>
											<option value="Saturday">Saturday</option>
											<option value="Sunday">Sunday</option>
										</select> 
										<label for="part_f_the_day" style="margin-top:1em;background-color:rgb(137, 47, 179);padding:.5em;color:rgb(255, 255, 255);">Edit Part of the day</label> <p style="margin-top:1em;background-color:rgb(137, 47, 179);padding:.5em;color:rgb(255, 255, 255);">Current: {{$availability['part_of_the_day']}}</p>
										<select name="paart_of_the_day" id="select" required style="border-bottom-color:rgb(102, 0, 128);">
											<option value="">Change here</option>
											<option value="Morning">Morning</option>
											<option value="Afternoon">Afternoon</option>
											<option value="Evening">Evening</option>
										</select> 
										<label for="time" style="">Edit Time</label><br>
										<input type="time" name="time" value="{{$availability['time']}}" required id="time">
										<input type="submit" id="sss"value="Update">
										<br>
										<a href="/mySchedules">Cancel</a>
									</form>
									
									
									
								</header>
							
								
							</article>


					</div>

				

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>