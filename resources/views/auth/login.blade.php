<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('/assests/admin1/https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset ('/assests/admin1/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('/assests/admin1/dist/css/adminlte.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset ('/assests/admin1/plugins/iCheck/square/blue.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="{{ asset ('/assests/admin1/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Login</b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>



        <div class="form-group has-feedback">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus> @if ($errors->has('email'))
        <span class="fa fa-envelope form-control-feedback">
        <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
        </div>
        </div>


<div class="form-group has-feedback">
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
@if ($errors->has('password'))
<span class="fa fa-lock form-control-feedback">
<strong>{{ $errors->first('password') }}</strong>
</span>
@endif
</div>
</div>
                        
                        <div class="row">
                        <div class="col-8">
                        <div class="checkbox icheck">
                        <label> <input type="checkbox"> Remember Me </label>
                        </div>
                        </div>

        <!-- /.col -->
        <div class="col-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
        </div>
        </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p> -->
                    <br>
                    <p class="mb-0">
                    <a href="register" class="btn btn-block btn-danger">Register a new membership</a>
                    </p>
                    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>