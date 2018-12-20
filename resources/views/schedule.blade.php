<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/><link rel="stylesheet" href="{{ asset('web/assets/mobirise-icons/mobirise-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('tether/tether.min.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-grid.min.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-reboot.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dropdown/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('animate.css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('socicon/css/styles.css') }}">
	<link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('mobirise-gallery/style.css') }}">
	<link rel="stylesheet" href="{{ asset('mobirise/css/mbr-additional.css') }}" type="text/css">
	<title>SidoRabi | Wedding Organizer</title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</style>
</head>
<body>
	@include('nav')
	<div class="container" style="padding-top: 100px;">
		<div class="row">
			<div class="col-md-2"></div>	
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<script src="{{ asset('web/assets/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('popper/popper.min.js') }}"></script>
	<script src="{{ asset('tether/tether.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('smooth-scroll/smooth-scroll.js') }}"></script>
	<script src="{{ asset('dropdown/js/script.min.js') }}"></script>
	<script src="{{ asset('touch-swipe/jquery.touch-swipe.min.js') }}"></script>
	<script src="{{ asset('jquery-mb-ytplayer/jquery.mb.ytplayer.min.js') }}"></script>
	<script src="{{ asset('jquery-mb-vimeo_player/jquery.mb.vimeo_player.js') }}"></script>
	<script src="{{ asset('masonry/masonry.pkgd.min.js') }}"></script>
	<script src="{{ asset('imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('bootstrap-carousel-swipe/bootstrap-carousel-swipe.js') }}"></script>
	<script src="{{ asset('viewport-checker/jquery.viewportchecker.js') }}"></script>
	<script src="{{ asset('theme/js/script.js') }}"></script>
	<script src="{{ asset('mobirise-slider-video/script.js') }}"></script>
	<script src="{{ asset('mobirise-gallery/player.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale-all.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#calendar').fullCalendar({
				"locale": "id",
				"lan":"id",
				"header":{
					"left":"prev,next today",
					"center":"title",
					"right":"month"
				},
				"eventLimit":true,
				"events":[
				@foreach($reservations as $reservation)
				{
					"id":{!!$reservation->id !!},
					"title":"{{$reservation->user->username}}",
					"allDay":true,
					"start":"{{$reservation->date}}",
					"end":"{{$reservation->date}}",
					"url":"\/",
					"color":"#cddc39",
					"backgroundColor":"#512DA8",
					"borderColor":"#000",
					"textColor":"#fff"
				},
				@endforeach
				],
				dayClick: function(date, jsEvent, view) {
					if (moment().format('YYYY-MM-DD') === date.format('YYYY-MM-DD') || date.isAfter(moment())) {

						var eventsCount = 0;
						var date = date.format('YYYY-MM-DD');
						$('#calendar').fullCalendar('clientEvents', function(event) {
							var start = moment(event.start).format("YYYY-MM-DD");
							var end = moment(event.end).format("YYYY-MM-DD");
							if(date == start)
							{
								eventsCount++;
							}
						});
						if (eventsCount<2) {
							window.location = document.URL + "/create/" + date;	
						}
						else{
							alert("Tanggal ini sudah penuh order");
						}
					}
				}
			});
		});
	</script>
</body>
</html>