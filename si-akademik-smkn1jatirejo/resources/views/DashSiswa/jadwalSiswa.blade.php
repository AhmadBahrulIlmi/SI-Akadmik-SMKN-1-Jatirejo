<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MuridKu</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link bg-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block bg-light">
        <a href="{{ url('dashsiswa') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block bg-light">
        @yield('menuatas')
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="logo">
        <a class="text-bold mt-2">MURIDKU</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-white-primary elevation-3">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/') }}dist/img/logo-sekolah.png" class="img-lg">
        </div>
        <div class="info font-weight-bold mt-1 ml-4">
          <a>MuridKu</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      @include('layout.sidebarSiswa')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              {{-- BUAT JUDUL --}}
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row ml-2">
            <div class="card">
                <div class="card-body" style="width: 970px">
                        <div class="card-body" style="width: 970px">
                            <table class="table ">
                                <thead>
                                    <tr>
                                      <th scope="col">Mata Pelajaran</th>
                                      <th scope="col">Hari</th>
                                      <th scope="col">Jam</th>
                                      <th scope="col">Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bahasa Indonesia</td>
                                        <td>Senin</td>
                                        <td>08:00</td>
                                        <td>XII-01</td>
                                    </tr>
                                    <tr>
                                      <td>Matematika</td>
                                      <td>Senin</td>
                                      <td>09:00</td>
                                      <td>XII-01</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                 </div>
            </div>
        </div>
      </div>
    </section>
  </div>
    <!-- /.content -->
  <footer class="main-footer">
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/') }}dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('/') }}dist/js/demo.js"></script> --}}
</body>
</html>
