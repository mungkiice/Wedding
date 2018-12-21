<!DOCTYPE html>
<html>
<head>
    <title>SidoRabi | Wedding Organizer</title>
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
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('mobirise/css/mbr-additional.css') }}" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
    .popup-gallery a{
        display:none;
    }
    .popup-gallery a:first-child{
        display:block;
    }
</style>

</head>
<body>
    <section class="menu cid-r9tYpzg34C" once="menu" id="menu2-0" data-rv-view="395">
        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
      <!--  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button> -->
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="/">SIDORABI WEDDING ORGANIZER</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item dropdown open">
                    <a class="nav-link link dropdown-toggle text-black display-4" href="index.html" data-toggle="dropdown-submenu" aria-expanded="true">Beranda</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item text-black display-4" href="/#features18-5">Galeri</a>
                        <a class="dropdown-item text-black display-4" href="/#header12-6">Vendor</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="/services">
                    Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="/aboutus">Tentang Kami</a>
                </li>
                @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="/reservation">Reservasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="/profile">Profil Saya</a>
                </li>
                @if(Auth::user()->reservations()->where('status', 'perencanaan')->get()->isNotEmpty())
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="/user/cart">List Vendor Saya</a>
                </li>
                @endif
                @endif
            </ul>
            <div class="navbar-buttons mbr-section-btn">
                @if(Auth::guest())
                <a class="btn btn-sm btn-success display-4" href="/login">Masuk</a>
                @else
                <a class="btn btn-sm btn-success display-4" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Keluar</a>
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @endif
            </div>
        </div>
    </nav>
</section>

<section class="engine">
  <a href="">bootstrap slideshow</a>
</section>
<section class="carousel slide cid-r9tZV4LH6D" data-interval="false" id="slider1-1" data-rv-view="397">
    <div class="full-screen">
        <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="4000"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider1-1" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="2"></li></ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(/images/bg-cover.bc-2000x1000.jpg);"><div class="container container-slide">
                    <div class="image_wrapper">
                        <div class="mbr-overlay"></div>
                        <img src="{{ asset('images/bg-cover.bc-2000x1000.jpg') }}">
                        <div class="carousel-caption justify-content-center">
                            <div class="col-10 align-center">
                                <h2 class="mbr-fonts-style display-1">SIDORABI WEDDING ORGANIZER</h2>
                                <p class="lead mbr-text mbr-fonts-style display-5">Partner Acara Pernikahan Anda</p>
                                <!-- <div class="mbr-section-btn" buttons="0">
                                    <a class="btn  display-4 btn-success" href="/reservation">RESERVASI, DISINI! </a>
                                    <a class="btn  btn-white-outline display-4" href="index.html" target="_blank">EVENT CALENDAR</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(/images/05-klk-photography-ritz-carlton-2016-1400x935.jpg);">
                <div class="container container-slide">
                    <div class="image_wrapper">
                        <div class="mbr-overlay"></div>
                        <img src="{{ asset('images/05-klk-photography-ritz-carlton-2016-1400x935.jpg') }}">
                        <div class="carousel-caption justify-content-center">
                            <div class="col-10 align-left">
                                <h2 class="mbr-fonts-style display-1">AKTIFITAS KAMI</h2>
                                <p class="lead mbr-text mbr-fonts-style display-5">Menciptakan pernikahan yang luar biasa adalah standar pelayanan kami. Desain inovatif, hiburan, dekorasi dan acara bertema konten yang disesuaikan dengan keinginan atau impian klien kami yang akan disajikan secara detail dan profesional sehingga akan menjadi momen yang tidak akan terlupakan sepanjang waktu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(/images/131879-1322x799.jpg);">
                <div class="container container-slide">
                    <div class="image_wrapper">
                        <div class="mbr-overlay"></div>
                        <img src="{{ asset('images/131879-1322x799.jpg') }}">
                        <div class="carousel-caption justify-content-center">
                            <div class="col-10 align-right">
                                <h2 class="mbr-fonts-style display-1">TIM KAMI</h2>
                                <p class="lead mbr-text mbr-fonts-style display-5">Sebagai wedding organizer premium di Malang, Sidorabi Wedding Organizer adalah perusahaan layanan wedding organizer yang menawarkan one stop shop untuk pernikahan baik pernikahan tradisional maupun internasional. Dengan tim yang profesional dan berpengalaman.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-1">
            <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
            <span class="sr-only">Sebelumnya</span>
        </a>
        <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-1">
            <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
            <span class="sr-only">Selanjutnya</span>
        </a>
    </div>
</div>

</section>

<section class="features18 popup-btn-cards cid-r9u7YX24WL" id="features18-5" data-rv-view="409">




    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
        GALERI FOTO</h2>
        <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style mbr-light">
        Bagikan Kebahagiaan Anda Bersama Kami&nbsp;</h3>
        <div class="media-container-row pt-5 ">
            @foreach($galleries as $gallery)
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper ">
                    <div class="card-img">
                        <!-- <div class="mbr-overlay"></div> -->
                        <!-- <div class="mbr-section-btn text-center"><a href="" class="btn btn-info display-4">MORE</a></div> -->
                        <div class="popup-gallery">
                            @foreach($gallery->photos as $photo)
                            <a href="/storage/{{ $photo->path }}">
                                <img src="/storage/{{ $photo->path }}">         
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">{{ $gallery->celeb }}</h4>
                        <p class="mbr-text mbr-fonts-style align-center display-7">
                            <div class="row">
                           <!--      @foreach($gallery->vendors as $vendor)
                                <span class="col-md-5">{{ $vendor->category->name }}</span>
                                <span class="col-md-2"> : </span>
                                <span class="col-md-5" style="padding: 0">{{ $vendor->name }}</span>
                                @endforeach -->
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="header12 cid-r9ufSc5Yta mbr-fullscreen" id="header12-6" data-rv-view="412">





    <div class="container  ">
        <div class="media-container">
            <div class="col-md-12 align-center">
                <h1 class="mbr-section-title pb-3 mbr-white mbr-bold mbr-fonts-style display-2">VENDOR KAMI</h1>
                <p class="mbr-text pb-3 mbr-white mbr-fonts-style display-5"></p>
                <!-- <div class="mbr-section-btn align-center py-2"><a class="btn btn-md btn-primary display-4" href="index.html">MORE</a></div> -->

                <div class="icons-media-container mbr-white">
                    <div class="card col-12 col-md-3 col-lg-3">
                        <div class="icon-block">
                            <a href="/vendors/mc">
                                <span class="mbr-iconfont mbri-github" style="color: rgb(35, 35, 35);" media-simple="true"></span>
                            </a>
                        </div>
                        <h5 class="mbr-fonts-style display-5">
                        MC</h5>
                    </div>

                    <div class="card col-12 col-md-3 col-lg-3">
                        <div class="icon-block">
                            <a href="/vendors/tempat">
                                <span class="mbr-iconfont mbri-home" style="color: rgb(35, 35, 35);" media-simple="true"></span>
                            </a>
                        </div>
                        <h5 class="mbr-fonts-style display-5">
                        TEMPAT</h5>
                    </div>

                    <div class="card col-12 col-md-3 col-lg-3">
                        <div class="icon-block">
                            <a href="/vendors/fotografi">
                                <span class="mbr-iconfont mbri-camera" style="color: rgb(35, 35, 35);" media-simple="true"></span>
                            </a>
                        </div>
                        <h5 class="mbr-fonts-style display-5">FOTOGRAFI</h5>
                    </div>

                    <div class="card col-12 col-md-3 col-lg-3">
                        <div class="icon-block">
                            <a href="/vendors/katering">
                                <span class="mbr-iconfont mbri-delivery" style="color: rgb(35, 35, 35);" media-simple="true"></span>
                            </a>
                        </div>
                        <h5 class="mbr-fonts-style display-5">KATERING</h5>
                    </div>

                    <div class="card col-12 col-md-3 col-lg-3">
                        <div class="icon-block">
                            <a href="/vendors/rias wajah">
                                <span class="mbr-iconfont mbri-smile-face" style="color: rgb(35, 35, 35);" media-simple="true"></span>
                            </a>
                        </div>
                        <h5 class="mbr-fonts-style display-5">RIAS WAJAH</h5>
                    </div>

                    <div class="card col-12 col-md-3 col-lg-3">
                        <div class="icon-block">
                            <a href="/vendors/dekorasi">
                                <span class="mbr-iconfont mbri-magic-stick" style="color: rgb(35, 35, 35);" media-simple="true"></span>
                            </a>
                        </div>
                        <h5 class="mbr-fonts-style display-5">DEKORASI</h5>
                    </div>

                    <div class="card col-12 col-md-3 col-lg-3">
                        <div class="icon-block">
                            <a href="/vendors/sound system">
                                <span class="mbr-iconfont mbri-speed" style="color: rgb(35, 35, 35);" media-simple="true"></span>
                            </a>
                        </div>
                        <h5 class="mbr-fonts-style display-5">SOUND SYSTEM</h5>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<!--     <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div> -->
</section>

<!-- <section class="mbr-gallery mbr-slider-carousel cid-r9uqXHO3cT" id="gallery2-b" data-rv-view="415">
    <div class="container">
        <div>
            <div class="mbr-gallery-filter container gallery-filter-active">
                <ul buttons="0">
                    <li class="mbr-gallery-filter-all">
                        <a class="btn btn-md btn-primary-outline active display-4" href="">All</a>
                    </li>
                </ul>
            </div>
            <div class="mbr-gallery-row">
                <div class="mbr-gallery-layout-default">
                    <div>
                        <div>
                            <div class="mbr-gallery-item mbr-gallery-item--p5" data-video-url="false" data-tags="November 2018">
                                <div href="#lb-gallery2-b" data-slide-to="0" data-toggle="modal">
                                    <img src="{{ asset('images/132000-934x1130-800x967.jpg') }}" alt="">
                                    <span class="icon-focus"></span>
                                    <span class="mbr-gallery-title mbr-fonts-style display-7">Type caption here</span>
                                </div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p5" data-video-url="false" data-tags="December 2018">
                                <div href="#lb-gallery2-b" data-slide-to="1" data-toggle="modal">
                                    <img src="{{ asset('images/131996-1079x741-800x549.jpg') }}" alt="">
                                    <span class="icon-focus"></span>
                                    <span class="mbr-gallery-title mbr-fonts-style display-7">Type caption here</span>
                                </div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p5" data-video-url="false" data-tags="December 2018">
                                <div href="#lb-gallery2-b" data-slide-to="2" data-toggle="modal">
                                    <img src="{{ asset('images/131999-1079x727-800x539.jpg') }}" alt="">
                                    <span class="icon-focus"></span>
                                    <span class="mbr-gallery-title mbr-fonts-style display-7">Type caption here</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery2-b">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <ol class="carousel-indicators">
                                <li data-app-prevent-settings="" data-target="#lb-gallery2-b" data-slide-to="0"></li>
                                <li data-app-prevent-settings="" data-target="#lb-gallery2-b" data-slide-to="1"></li>
                                <li data-app-prevent-settings="" data-target="#lb-gallery2-b" class=" active" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <img src="{{ asset('images/132000-934x1130.jpg') }}" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/131996-1079x741.jpg') }}" alt="">
                                </div>
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/131999-1079x727.jpg') }}" alt="">
                                </div>
                            </div>
                            <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery2-b">
                                <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery2-b">
                                <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <a class="close" href="#" role="button" data-dismiss="modal">
                                <span class="sr-only">Close</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="cid-r9us9JC98b" id="footer2-e" data-rv-view="430">
    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text">
                    <strong>Alamat</strong>
                    <br>
                    <br>Jl Simpang LA Sucipto Ruko Pandanwangi Park no 2, Pandanwangi, Blimbing, Kota Malang, Jawa Timur 65113<br><br><br><strong>Contacts</strong>
                    <br>
                    <br>Email: sidorabiwedding@gmail.com
                    <br>Nomor Telepon: 081216420575<br><br></p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <p class="mbr-text">
                        <strong>Media Sosial</strong>
                        <br>
                        <br>instagram.com/sidorabi_weddingorganizer/<br>
                        <br><br></p>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJnfFKZ64p1i0Rkmg4tpwkjoA" allowfullscreen=""></iframe></div>
                    </div>
                </div>
                <div class="footer-lower">
                    <div class="media-container-row">
                        <div class="col-sm-12">
                            <hr>
                        </div>
                    </div>
                    <div class="media-container-row mbr-white">
                        <div class="col-sm-6 copyright">
                            <p class="mbr-text mbr-fonts-style display-7"></p>
                        </div>
                        <div class="col-md-6">
                            <div class="social-list align-right">
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="https://www.facebook.com/pages/Sidorabi-Wedding-Organizer-Office/" target="_blank">
                                        <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="https://www.youtube.com/channel/UCnBcqFxsoI4o9fyAmgAihYg" target="_blank">
                                        <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="https://www.instagram.com/sidorabi_weddingorganizer/" target="_blank">
                                        <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                        <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('web/assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
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

    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbri-down mbr-iconfont"></i></a></div>
    <input name="animation" type="hidden">
    <script>
        $(document).ready(function() {
            $('.popup-gallery').each(function(){
                $(this).magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    tLoading: 'Loading image #%curr%...',
                    mainClass: 'mfp-img-mobile',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                         // Will preload 0 - before current, and 1 after the current image
                         preload: [0,1]
                     },
                     image: {
                    }
                });
            });
        });
    </script>
</body>
</html>
