<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Muridku</title>
  <link rel="icon" href="{{ asset('/') }}dist/img/logo-sekolah2.png"/>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary card-dark">
      <div class="card-header text-center">
        <h1 class="text-bold text-dark">Login Muridku</h1>
        <h6 class="text-center text-small">Smkn 1 Jatirejo Mojokerto</h6>
      </div>
      <div class="card-body">
        <form action="/do_login" method="post">
            @csrf
          <div class="input-group mb-4">
            <input type="Text" class="form-control" placeholder="Username" name="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-dark">Log In</button>
          </div>
          <!-- /.col -->
      </div>
    </div>
  </div>
</body>
</html>