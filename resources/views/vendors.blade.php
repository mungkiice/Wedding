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
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/redmond/jquery-ui.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.js"></script>


	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
	#myInput {
		background-image: url('/css/searchicon.png'); /* Add a search icon to input */
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
			<div class="row">
				<div class="col-md-4">
					<p>
						<label for="amount">Value range:</label>
						<input type="text" id="amount" style="border: 0; color: #f6931f; font-weight: bold;" />
					</p>

					<div id="slider-range"></div>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari dengan nama..">
				</div>
			</div>
			<div class="row" id="product-filter">
				@foreach($vendors as $vendor)
				<div id="vendor-item" class="mix col-lg-3 col-md-6 best">
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
							<a href="/user/{{$vendor->id}}/cart" class="site-btn btn-line">ADD TO CART</a>
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

$(document).ready(function() {
  $(function() {
    $( "#slider-range, #slider-range2" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 20, 450 ],
      slide: function( event, ui ) {
        // in this function we can define what happens when a user changes the sliders
        $( "#amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
        
        var table = document.getElementById("theTable");
        for (var i = 1, row; row = table.rows[i]; i++) {
           //iterate through rows (we SKIP the first row: counter starts at 1!)
           for (var j = 0, col; col = row.cells[j]; j++) {
               //iterate through columns: if first column not in range: HIDE, else SHOW
               
               if (j == 0) {             // if first column
                   if ($(col).html() >= ui.values[ 0 ] && $(col).html() <= ui.values[ 1 ]) {
                       // if in interval
                       $(row).show();
                   } else {
                       $(row).hide();
                   }
               }
           }  
        }          
      }
    });
      
    $( "#amount" ).val($( "#slider-range" ).slider( "values", 0 ) +
      " - " + $( "#slider-range" ).slider( "values", 1 ) );
  });
});
</script>
</script>
</body>
</html>
