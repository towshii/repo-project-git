<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Log in</title>
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
								<h1>Log in</h1>
								<form  action="{{route ('auth.check')}}" method="post" id="myform">
									@if(Session::get('fail'))
									<div style="color: rgb(231, 79, 79);width:14em; padding:1em;border-radius:1em;">
										{{Session::get('fail')}}
									</div>
									@endif
									@csrf
									<input type="hidden" name="usertype" value="student">
									<label for=""></label>
									<input type="text" name="username" required  value="{{old('username')}}" placeholder="Username">
									<input type="password" name="password" required placeholder="Password">
									
									<button type="submit" style="margin-top:1em;">Go</button>
									
								</form>
								
							</div>
						</div>
						<nav>
							<ul>
								
								<li><a href="/reg">Create acc</a></li>
								<li><a href="/">Home</a></li>
								
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
