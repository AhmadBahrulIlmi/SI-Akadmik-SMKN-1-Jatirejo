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
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label class="text-blue">Biodata Siswa</label>
                        </div>
                        <div class="mb-2">
                            <label for="id_siswa" class="form-label">ID</label>
                            <input class="form-control" type="text" name="" disabled value="2002021">
                        </div>
                        <div class="mb-2">
                            <label for="id_siswa" class="form-label">Nama Lengkap</label>
                            <input class="form-control" type="text" name="" disabled value="Ahmad Bahrul Ilmi">
                        </div>
                        <div class="mb-2">
                            <label for="id_siswa" class="form-label">Jurusan</label>
                            <input class="form-control" type="text" name="" disabled value="Multimedia">
                        </div>
                        <div class="mb-2">
                            <label for="id_siswa" class="form-label">Jenis Kelamin</label>
                            <input class="form-control" type="text" name="" disabled value="Laki Laki">
                        </div>
                        <div class="mb-2">
                            <label for="id_siswa" class="form-label">Tanggal Lahir</label>
                            <input class="form-control" type="text" name="" disabled value="10-09-2002">
                        </div>
                        <div class="mb-2">
                            <label for="id_siswa" class="form-label">Agama</label>
                            <input class="form-control" type="text" name="" disabled value="Islam">
                        </div>
                        <div class="mb-2">
                            <label for="id_siswa" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="" disabled value="Mojokerto">
                        </div>
                        <div class="mb-2">
                            <label for="id_siswa" class="form-label">Telepon</label>
                            <input class="form-control" type="text" name="" disabled value="087851088335">
                        </div>
                        <div class="mb-2">
                            <label for="id_siswa" class="form-label">Nama Wali</label>
                            <input class="form-control" type="text" name="" disabled value="Sunyoto">
                        </div>
                    </form>
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
