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
        <div class="row text-center  ">
            <div class="col-md-12">
                <br/>
                <br/>
                <h2>Register</h2>

                <h5>( Register yourself to get access )</h5>
                <br/>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>  New User ? Register Yourself </strong>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="/register"  enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <br/>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                <input type="text" class="form-control" placeholder="Your Name" name="name" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                <input type="text" class="form-control" placeholder="Desired Username" name="username" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" placeholder="Your Email" name="email" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-image"  ></i></span>
                                <input id="file" type="file" class="form-control" placeholder="Input File Image" name="photo" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input id="password" type="password" class="form-control" placeholder="Enter Password" name="password" required />
                            </div>
                            <span id="message"></span>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input id="confirm_password" type="password" class="form-control" placeholder="Retype Password" name="password_confirmation" required />
                            </div>
                            <button type="submit" class="btn btn-success">Register Me</button>
                            <hr />
                            Already Registered ?  <a href="/login" >Login here</a>
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
    <script>
        $('#confirm_password').on('keyup', function () {
          if ($('#password').val() == $('#confirm_password').val()) {
            $('#message').html('cocok').css('color', 'green');
        } else 
        $('#confirm_password').setCustomValidity('Konfirmasi password tidak cocok');
        // $('#message').html('tidak cocok').css('color', 'red');
    });
</script>

</body>
</html>
