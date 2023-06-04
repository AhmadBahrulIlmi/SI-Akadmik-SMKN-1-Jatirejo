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
        <a href="{{ url('dashguru') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block bg-light">
        @yield('menuatas')
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="logo">
        <a class="text-bold mt-2">GURU MURIDKU</a>
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
      @include('layout.sidebarGuru')
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
      <div class="row ml-2">
        <div class="card">
            <div class="card-body" style="width: 1000px">
                <form action="/datanilai2update/{{ $tb_nilai->id_nilai }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label for="semester" class="form-label">Semester</label>
                        <input type="text" class="form-control" id="semester" name="semester"value="{{ $tb_nilai->semester}}">
                    </div>
                    <div class="mb-2">
                        <label for="id_siswa" class="form-label">Nama Siswa</label>
                        <select class="form-control" name="id_siswa" aria-label="Default select example">
                            <option selected>Pilih Siswa</option>
                            @foreach($tb_siswa as $data )
                            <option value="{{ $data->id_siswa }}" {{ $data->id_siswa == $tb_nilai->nama ? 'selected' : '' }}>{{ $data->nama }}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="mb-2">
                        <label for="id_mapel" class="form-label">Mata Pelajaran</label>
                        <select class="form-control" name="id_mapel" aria-label="Default select example">
                            <option selected>Pilih Mata Pelajaran</option>
                            @foreach($tb_mapel as $data )
                            <option value="{{ $data->id_mapel }}" {{ $data->id_mapel == $tb_nilai->nama_mapel ? 'selected' : '' }}>{{ $data->nama_mapel }}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="mb-2">
                        <label for="tugas1" class="form-label">Tugas 1</label>
                        <input type="number" class="form-control" id="tugas1" name="tugas1"value="{{ $tb_nilai->tugas1}}">
                    </div>
                    <div class="mb-2">
                        <label for="tugas2" class="form-label">Tugas 2</label>
                        <input type="number" class="form-control" id="tugas2" name="tugas2"value="{{ $tb_nilai->tugas2}}">
                    </div>
                    <div class="mb-2">
                        <label for="tugas3" class="form-label">Tugas 3</label>
                        <input type="number" class="form-control" id="tugas3" name="tugas3"value="{{ $tb_nilai->tugas3}}">
                    </div>
                    <div class="mb-2">
                        <label for="uts" class="form-label">UTS</label>
                        <input type="number" class="form-control" id="uts" name="uts"value="{{ $tb_nilai->uts}}">
                    </div>
                    <div class="mb-2">
                        <label for="uas" class="form-label">UAS</label>
                        <input type="number" class="form-control" id="uas" name="uas"value="{{ $tb_nilai->uas}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
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
