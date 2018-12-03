<!DOCTYPE html>
<html>
<head>
  <title>SidoRabi | Wedding Organizer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/jquery-ui.css') }}">
  <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
  <link rel="stylesheet" href="{{ asset('web/assets/mobirise-icons/mobirise-icons.css') }}">
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
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  @include('nav')
  <div class="container">
    <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2" style="margin-top:100px">
    FORM RESERVATION </h2>
    <form class="form-horizontal" action="/reservation" method="POST">
      {{ csrf_field() }}
      <div class="form-group" style="margin-left:20%; margin-right:10%">
        <label class="display-7">Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control"  placeholder="Enter name" name="name">
        </div>
      </div>
      <div class="form-group" style="margin-left:20%; margin-right:10%">
        <label class="display-7 " >Handphone:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control"  placeholder="Enter Telepon" name="telepon">
        </div>
      </div>
      <div class="form-group" style="margin-left:20%; margin-right:10%">
        <label class="display-7" >Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" placeholder="Enter email" name="email">
        </div>
      </div>
      <div class="form-group" style="margin-left:20%; margin-right:10%">
        <label class="display-7">Date:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="datepicker" name="Tanggal" value="{{date('m/d/Y', strtotime($date))}}">
        </div>
      </div>
      <div class="form-group" style="margin-left:20%; margin-right:10%">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
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
  <script src="{{ asset('mobirise-gallery/script.js') }}"></script>

  <script src="{{ asset('bootstrap/js/jquery-1.12.4.js') }}"></script>
  <script src="{{ asset('bootstrap/js/jquery-ui.js') }}"></script>
  <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
  </script>


  <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbri-down mbr-iconfont"></i></a></div>
  <input name="animation" type="hidden">

</body>
<!--<script type="text/javascript">
  $('.datepicker').datepicker({
      format: 'mm/dd/yyyy',
      startDate: '-3d'
  })
</script> -->
</html>
