<!DOCTYPE HTML>
<html>
<head>
	<title>SidoRabi | Wedding Organizer</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="{{ asset('css/service.css') }}" />    
	<link rel="stylesheet" href="{{ asset('web/assets/mobirise-icons/mobirise-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-grid.min.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-reboot.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dropdown/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('animate.css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('socicon/css/styles.css') }}">
	<link rel="stylesheet" href="{{ asset('mobirise/css/mbr-additional.css') }}" type="text/css">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	@include('nav')
	<section id="main">
		<div id="header">
			<div class="logo"><a href="#">Layanan</span></a></div>
		</div>

		<div class="inner">
			<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="image fit flush">
					<img src="{{asset('images/service.jpg') }}" alt="" />
				</div>
				<header class="special">
					<h2>Sidorabi Wedding Organizer</h2>
					<p>Layanan Yang Kami Sajikan</p>
				</header>
				<div class="content">
					{!! $service->text !!}
				</div>
			</section>


			<!-- Scripts -->
			<script src="{{ asset('web/assets/jquery/jquery.min.js') }}"></script>
			<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
			<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
			<script src="{{ asset('smooth-scroll/smooth-scroll.js') }}"></script>
			<script src="{{ asset('dropdown/js/script.min.js') }}"></script>
			<script src="{{ asset('js/service/jquery.poptrox.min.js') }}"></script>
			<script src="{{ asset('js/service/skel.min.js') }}"></script>
			<script src="{{ asset('js/service/util.js') }}"></script>
			<script src="{{ asset('js/service/main.js') }}"></script>

		</body>
		</html>
