<!DOCTYPE html>
<html>
<head>
 <style type="text/css">
 p{
     font-family: serif;
     line-height: 1.75em;
     font-size: 18px;
 }
 i{
     font-family: sans;
     color: orange;
 }
 .emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
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
<link rel="stylesheet" href="{{ asset('mobirise/css/mbr-additional.css') }}" type="text/css">
<!------ Include the above in your HEAD tag ---------->

<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    @include('nav')
    <div class="container emp-profile">
        <form method="post" action="/profile/edit" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="/storage/{{auth()->user()->photo}}">
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="photo"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            {{ auth()->user()->name }}
                        </h5>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
<!--                     <div class="profile-work">
                        <p>Wedding Date</p>
                        <a href="">20 Januari 2018 </a><br/>
                    </div> -->
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Username</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $user->username }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nama</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $user->name }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $user->email }}</p>
                                </div>
                            </div>
<!--                             <div class="row">
                                <div class="col-md-6">
                                    <label>Nomor Telepon</label>
                                </div>
                                <div class="col-md-6">
                                    <p>123 456 7890</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>The name of bride and groom </label>
                                </div>
                                <div class="col-md-6">
                                    <p>Nefiana Mey & Kim Han Bin</p>
                                </div>
                            </div> -->
                        </div>
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Reservasi Atas Nama</label>
                                </div>
                                <div class="col-md-3">
                                    <label>Tanggal</label>
                                </div>
                                <div class="col-md-5">
                                    <label>Status Reservasi</label>
                                </div>
                            </div>
                            @foreach($reservations as $reservation)
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>{{ $reservation->user->name }}</p>
                                </div>
                                <div class="col-md-3">
                                    <p>{{ date('D, d M Y', strtotime($reservation->date)) }}</p>
                                </div>
                                <div class="col-md-5">
                                    <p>{{ $reservation->status }}</p>
                                </div>
                            </div>
                            <div class="row" style="padding-left: 20px;">
                                <div class="col-md-4">
                                    <label>Vendor</label>
                                </div>
                                <div class="col-md-4">
                                    <label>Bukti Pembayaran</label>
                                </div>
                                <div class="col-md-4">
                                    <label>Progres</label>
                                </div>
                            </div>
                            @foreach($reservation->vendors()->withPivot('status', 'payment_proof')->get() as $vendor)
                            <hr>
                            <div class="row" style="padding-left: 20px;">
                                <div class="col-md-4">
                                    <p>{{$vendor->name}}</p>
                                </div>
                                <div class="col-md-4">
                                    <img style="width: 100%" src="/storage/{{$vendor->pivot->payment_proof}}">
                                </div>
                                <div class="col-md-4">
                                    <div class="progress">
                                        <div class="progress-bar" id="vendor-progress-{{$vendor->id}}" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%; height: 30px;">
                                            ({{$vendor->pivot->status}})
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
    <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
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
    <script>
        $(document).ready(function(){
            $('.progress-bar').each(function(){
                var progress = this.innerText;
                if (progress.includes('waiting')) {
                    $(this).width('40%');
                    $(this).text('40% ' + progress);
                }else if(progress.includes('DP')){
                    $(this).width('60%');
                    $(this).text('60% ' + progress);
                }else if(progress.includes('accepted')){
                    $(this).width('80%');
                    $(this).text('80% ' + progress);
                }else if(progress.includes('pelunasan')){
                    $(this).width('100%');
                    $(this).text('100% ' + progress);
                }
            });
        });
    </script>
</body>
</html>
