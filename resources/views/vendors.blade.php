<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>SidoRabi | Wedding Organizer</title>
	<meta charset="UTF-8">
	<meta name="description" content="Sidorabi Wedding Organizer">
	<meta name="keywords" content="wedding, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('theplaza/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('theplaza/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('theplaza/css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ asset('theplaza/css/style.css') }}"/>
	<link rel="stylesheet" href="{{ asset('theplaza/css/animate.css') }}"/>
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('socicon/css/styles.css') }}">
	<link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('mobirise-gallery/style.css') }}">
	<link rel="stylesheet" href="{{ asset('mobirise/css/mbr-additional.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('dropdown/css/style.css') }}">

	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/redmond/jquery-ui.css">
	<!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"> -->


	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
	.formInput {
		background-position: 10px 12px; /* Position the search icon */
		background-repeat: no-repeat; /* Do not repeat the icon image */
		width: 100%; /* Full-width */
		font-size: 16px; /* Increase font-size */
		padding: 12px 20px 12px 40px; /* Add some padding */
		border: 1px solid #ddd; /* Add a grey border */
		margin-bottom: 12px; /* Add some space below the input */
		border-radius: 50px;
		opacity: .9;
	}
	#slider-range, #slider-range2 {
		width:300px;
		margin-top:10px;
	}
	#slider-range2.ui-slider-horizontal {
		border: 0 none;
	}
	#slider-range2.ui-slider-horizontal .ui-slider-range, #slider-range2.ui-slider-horizontal .ui-slider-handle {
		background: url("http://unbug.ru/examples/jquery/slider/slide.png") repeat scroll 0 0 transparent;
	}
	#slider-range2.ui-slider-horizontal .ui-slider-range {
		background-position: 0 -42px;
		background-repeat: repeat-x;
		height: 21px;
	}
	#slider-range2.ui-slider-horizontal .ui-slider-handle {
		background-position: 0 0;
		background-repeat: no-repeat;
		border: 0 none;
		height: 21px;
		top: 0;
		width: 21px;
	}
	#slider-range2.ui-slider-horizontal .ui-slider-handle:focus {
		outline: 0 none;
	}
	#slider-range2.ui-slider-horizontal .ui-slider-handle + .ui-slider-handle {
		background-position: -21px 0;
	}
</style>

</head>
<body>
	@include('nav')
	<section class="product-section spad">
		<div class="container">
			<ul class="product-filter controls">
				@foreach($categories as $category)
				<li class="control"><a href="{{'/vendors/'.$category->name}}">{{$category->name}}</a></li>
				@endforeach
			</ul>
			<div class="row" style="margin-bottom: 50px;">
				<div class="col-md-4">
					<label for="amount">Kisaran Harga:</label>
					<input class="formInput" type="text" id="amount" style="border: 0; color: #f6931f; font-weight: bold; text-align: center;" value="Rp. 1,000,000 - Rp. 10,000,000" />
					<div id="slider-range"></div>
					<div id="slider-container"></div>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<input class="formInput" type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari nama vendor.." style="margin-top: 30px;">
				</div>
			</div>
			<div class="row" id="product-filter">
				@foreach($vendors as $vendor)
				<div id="vendor-item" class="mix col-lg-3 col-md-6 best" data-price="{{$vendor->price}}">
					<div class="product-item">
						<figure>
							<img src="{{ '/storage/' . $vendor->photo }}" alt="">
<!-- 							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="{{ asset('theplaza/img/icons/eye.png') }}" alt="">
									<p>quick view</p>
								</div>
								<div class="pi-m-right">
									<img src="{{ asset('theplaza/img/icons/heart.png') }}" alt="">
									<p>save</p>
								</div>
							</div> -->
						</figure>
						<div class="product-info">
							<h6>{{ $vendor->name }}</h6>
							<p>Rp. {{ number_format($vendor->price) }}</p>
							<a href="/user/{{$vendor->id}}/cart" class="site-btn btn-line">ADD</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>

	<script src="{{ asset('theplaza/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('theplaza/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('theplaza/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('theplaza/js/mixitup.min.js') }}"></script>
	<script src="{{ asset('theplaza/js/sly.min.js') }}"></script>
	<script src="{{ asset('theplaza/js/jquery.nicescroll.min.js') }}"></script>
	<script src="{{ asset('theplaza/js/main.js') }}"></script>
	<script src="{{ asset('theme/js/script.js') }}"></script>
	<script src="{{ asset('dropdown/js/script.min.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript">
		function myFunction() {
    		// Declare variables
    		var input, filter, ul, li, a, i, txtValue;
    		input = document.getElementById('myInput');
    		filter = input.value.toUpperCase();
    		ul = document.getElementById("product-filter");
    		li = ul.getElementsByClassName('best');

    		// Loop through all list items, and hide those who don't match the search query
    		for (i = 0; i < li.length; i++) {
    			a = li[i].getElementsByTagName("h6")[0];
    			txtValue = a.textContent || a.innerText;
    			if (txtValue.toUpperCase().indexOf(filter) > -1) {
    				li[i].style.display = "";
    			} else {
    				li[i].style.display = "none";
    			}
    		}
    	}
    	$(function() {
    		$('#slider-container').slider({
    			range: true,
    			min: 1000000,
    			max: 10000000,
    			values: [1000000, 10000000],
    			slide: function(event, ui) {
    				$( "#amount" ).val( "Rp. " + numberWithCommas(ui.values[ 0 ]) + " - Rp. " + numberWithCommas(ui.values[ 1 ]) );
    				var mi = ui.values[ 0 ];
    				var mx = ui.values[ 1 ];
    				filterSystem(mi, mx);
    			}
    		});
    		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    			" - $" + $( "#slider-range" ).slider( "values", 1 ) );
    	});
    	function numberWithCommas(x) {
    		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    	}
    	function filterSystem(minPrice, maxPrice) {
    		$("#product-filter div.best").hide().filter(function() {
    			var price = parseInt($(this).data("price"), 10);
    			return price >= minPrice && price <= maxPrice;
    		}).show();
    	}
    </script>
</body>
</html>
