<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.10, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.10, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ asset('images/transparan-122x122.jpg') }}" type="image/x-icon">
  <meta name="description" content="">
  <title>SidoRabi | Gallery</title>
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
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
</head>
<body>
  @include('nav')
  <section class="product-section spad">
    <div class="row" style="width: 60%; margin: auto">
      @foreach($gallery->photos as $photo)
      <div class="col-md-6">
        <img class="img-fluid img-thumbnail" src="/storage/{{$photo->path}}">
      </div>
      @endforeach
    </div>
  </section>
  <section class="map1 cid-rhAHxlWJGQ" id="map1-1r"> 
    <div class="google-map">
      <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.457020390933!2d112.6554127376503!3d-7.951632757858872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629ae674af19d%3A0x808e249cb6386892!2sSidorabi+Wedding+Organizer+Office!5e0!3m2!1sen!2sus!4v1549723399265" allowfullscreen=""></iframe>
    </div>
  </section>

  <section once="" class="cid-rhADLfeUl7" id="footer7-1n">
    <div class="container">
      <div class="media-container-row align-center mbr-white">
        <div class="row social-row">
          <div class="social-list align-right pb-2">
            <div class="soc-item">
              <a href="https://twitter.com/mobirise" target="_blank">
                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
              </a>
            </div><div class="soc-item">
              <a href="https://www.facebook.com/sidorabiWO/" target="_blank">
                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
              </a>
            </div><div class="soc-item">
              <a href="https://www.youtube.com/channel/UCnBcqFxsoI4o9fyAmgAihYg" target="_blank">
                <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon"></span>
              </a>
            </div><div class="soc-item">
              <a href="https://www.instagram.com/sidorabi_weddingorganizer/" target="_blank">
                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
              </a>
            </div></div>
          </div>
          <div class="row row-copirayt">
            <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
              © Copyright 2019 Sido Rabi Wedding Organizer- All Rights Reserved
            </p>
          </div>
        </div>
      </div>
    </section>

    <script src="{{ asset('web/assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('popper/popper.min.js') }}"></script>
    <script src="{{ asset('tether/tether.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('dropdown/js/script.min.js') }}"></script>
    <script src="{{ asset('touchswipe/jquery.touch-swipe.min.js') }}"></script>
    <script src="{{ asset('vimeoplayer/jquery.mb.vimeo_player.js') }}"></script>
    <script src="{{ asset('mbr-flip-card/mbr-flip-card.js') }}"></script>
    <script src="{{ asset('bootstrapcarouselswipe/bootstrap-carousel-swipe.js') }}"></script>
    <script src="{{ asset('masonry/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('ytplayer/jquery.mb.ytplayer.min.js') }}"></script>
    <script src="{{ asset('theme/js/script.js') }}"></script>
    <script src="{{ asset('gallery/player.min.js') }}"></script>
    <script src="{{ asset('gallery/script.js') }}"></script>
    <script src="{{ asset('slidervideo/script.js') }}"></script>

  </body>
  </html>