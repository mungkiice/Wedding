<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>SidoRabi | Wedding Organizer</title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

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
	<meta name="csrf-token" content="{{ csrf_token() }}">


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	@include('nav')
<!-- 	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="">Home</a> /
				<a href="">Sales</a> /
				<a href="">Bags</a> /
				<span>Cart</span>
			</div>
			<h1 class="site-breadcrumb">My Cart</h1>
		</div>
	</div> -->
	<!-- Page Info end -->


	<!-- Page -->
	<div class="page-area cart-page spad" style="margin-top: 20px;">
		@if($cart != null)
		<div class="container">
			<div class="cart-table">
				<table>
					<thead>
						<tr>
							<th class="product-th">Vendor</th>
							<!-- <th>Price</th> -->
							<!-- <th>Quantity</th> -->
							<th class="total-th">Harga</th>
						</tr>
					</thead>
					<tbody>
						@if($cart->vendors->isEmpty())
						<tr>
							<td>Daftar Vendor Kosong</td>
						</tr>
						@endif
						@foreach($cart->vendors as $vendor)
						<tr>
							<td class="product-col" data-id="{{$vendor->id}}">
								<img src="/storage/{{$vendor->photo}}" alt="">
								<div class="pc-title">
									<h4>{{$vendor->name}}</h4>
									<a href="/vendors/{{$vendor->category->name}}">{{$vendor->category->name}}</a>
								</div>
							</td>
							<!-- <td class="price-col">{{number_format($vendor->price)}}</td> -->
<!-- 							<td class="quy-col">
								<div class="quy-input">
									<span>Qty</span>
									<input type="number" value="01">
								</div>
							</td> -->
							<td class="total-col">Rp. {{number_format($vendor->price)}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="row cart-buttons">
				<div class="col-lg-5 col-md-5">
						<a class="site-btn btn-continue" href="/vendors" style="color: white;">Cari vendor</a>
				</div>
				<div class="col-lg-7 col-md-7 text-lg-right text-left">
					<a class="site-btn btn-clear" href="/user/cart/clear" style="color: black">Hapus semua vendor</a>
					<!-- <div class="site-btn btn-line btn-update">Update Cart</div> -->
				</div>
			</div>
		</div>
		<div class="card-warp">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="shipping-info">
							<h4>Catatan</h4>
							<p>Syarat dan Ketentuan</p>
							<div class="shipping-chooes">
								<div class="sc-item">
									<input type="radio" name="sc" id="one">
									<!-- <label for="one">Next day delivery<span>$4.99</span></label> -->
									<label for="one">Member diwajibkan untuk membayar DP sebesar 50% maksimal 3 x 24 jam setelah pemesanan</label>
								</div>
								<!-- <div class="sc-item">
									<input type="radio" name="sc" id="two">
									<label for="two">Standard delivery<span>$1.99</span></label>
								</div>
								<div class="sc-item">
									<input type="radio" name="sc" id="three">
									<label for="three">Personal Pickup<span>Free</span></label>
								</div> -->
							</div>
<!-- 							<h4>Cupon code</h4>
							<p>Enter your cupone code</p>
							<div class="cupon-input">
								<input type="text">
								<button class="site-btn">Apply</button>
							</div> -->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="cart-total-details">
							<h4>Total Tagihan</h4>
							<!-- <p>Final Info</p> -->
							<ul class="cart-total-card">
								<li>Subtotal Vendor<span>Rp. {{number_format($subtotal)}}</span></li>
								@if(optional($reservation)->packets)
								@foreach($reservation->packets as $packet)
								<li>{{$packet->name}}<span>Rp. {{number_format($packet->price)}}</span></li>
								@endforeach
								<li class="total">Total<span>Rp. {{number_format(optional($reservation->packets())->sum('price') + $subtotal)}}</span></li>
								@endif
							</ul>
							<a class="site-btn btn-full" onclick="event.preventDefault();
							postVendors();">Proses Reservasi</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@else
		<h4 style="text-align: center;">Masih dalam proses reservasi</h4>
		@endif
	</div>
	<script src="{{ asset('theplaza/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('theplaza/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('theplaza/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('theplaza/js/mixitup.min.js') }}"></script>
	<script src="{{ asset('theplaza/js/sly.min.js') }}"></script>
	<script src="{{ asset('theplaza/js/jquery.nicescroll.min.js') }}"></script>
	<script src="{{ asset('theplaza/js/main.js') }}"></script>
	<script src="{{ asset('theme/js/script.js') }}"></script>
	<script src="{{ asset('dropdown/js/script.min.js') }}"></script>
	<script>
		function postVendors(){
			var csrf = $('meta[name="csrf-token"]').attr('content');
			var vendorID = [];
			var i = 0;
			$('td.product-col').each(function(){
				vendorID.push($(this).data('id'));
			});

			$.post({
				url: '/reservation/addVendor',
				type: 'POST',
				data: {
					'vendorID' : vendorID, 
					'_token': csrf
				},
				success: function(response) {
					window.location = '/profile'
				}       
			})
		}
	</script>
</body>
</html>
