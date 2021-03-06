<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SidoRabi | Wedding Organizer</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  <div class="container">
    <div class="row text-center ">
      <div class="col-md-12">
        <br /><br />
        <h2> Autentikasi</h2>
        <h5>( Masuk untuk mendapatkan akses)</h5>
        <br />
      </div>
    </div>
    <div class="row ">
     <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
       <div class="panel panel-default">
        <div class="panel-heading">
         <strong>   Silahkan isi data untuk autentikasi </strong>
       </div>
       <div class="panel-body">
        <form role="form" method="POST" action="/login">
          {{ csrf_field() }}
          <br />
          <div class="form-group input-group">
           <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
           <input type="text" class="form-control" placeholder="username anda " name="username" />
        </div>
        <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
         <input type="password" class="form-control"  placeholder="password anda" name="password" />
       </div>
<!--          <div class="form-group">
           <label class="checkbox-inline">
             <input type="checkbox" /> Remember me
           </label>
           <span class="pull-right">
            <a href="#" >Forget password ? </a>
          </span>
        </div> -->
        <button type="submit" class="btn btn-primary">Masuk</button>
        <hr />
        Belum Punya Akun ? <a href="/register" >Daftar disini </a>
      </form>
    </div>

  </div>
</div>


</div>
</div>


<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{ asset('js/jquery.metisMenu.js') }}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
