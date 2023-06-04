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
        <div class="container">
            <div class="card-header">
                @if ($message = Session::get('input'))
                    <div class="alert alert-success alert-default-info">
                        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"
                            aria-label="Success:">
                            <use xlink:href="#check-circle-fill" />
                        </svg>
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                @endif
                @if ($message = Session::get('edit'))
                    <div class="alert alert-primary alert-default-info">
                        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"
                            aria-label="Info:">
                            <use xlink:href="#info-fill" />
                        </svg>
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                @endif
                @if ($message = Session::get('delete'))
                    <div class="alert alert-danger alert-default-info">
                        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img"
                            aria-label="Danger:">
                            <use xlink:href="#exclamation-triangle-fill" />
                        </svg>
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                @endif
                <a href="/inputNilaiSiswa">
                    <tr><button type="button" class="btn btn-primary btn-success">Tambah Data</button></tr>
                </a>
                <a href="/nilaiPDF" target="_blank">
                  <button type="button" class="btn btn-secondary btn-dark">Cetak Data</button>
                  </a>
                <div class="card-tools">
                    <form action="/inputNilaiSiswa" method="GET">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="search" name="search" id="search" class="form-control float-right"
                                placeholder="search">
                            <div class="input-group-append">
                                <button type="button-search" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          <table class="table ">
              <thead>
                  <tr>
                    <th scope="col">Semester</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Tugas 1</th>
                    <th scope="col">Tugas 2</th>
                    <th scope="col">Tugas 3</th>
                    <th scope="col">UTS</th>
                    <th scope="col">UAS</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($tb_nilai as $data)
                      <tr>
                        <th scope="data">{{ $data->semester }}</th>
                        <td>{{ $data->tb_siswa->nama}}</td>
                        <td>{{ $data->tb_datamapel->nama_mapel}}</td>
                        <td>{{ $data->tugas1 }}</td>
                        <td>{{ $data->tugas2}}</td>
                        <td>{{ $data->tugas3 }}</td>
                        <td>{{ $data->uts }}</td>
                        <td>{{ $data->uas }}</td>
                        <td>
                          <a href="/datanilai2edit/{{ $data->id_nilai }}" type="button" class="btn btn-primary">Ubah</a>
                          <a href="/datanilai2delete/{{ $data->id_nilai }}" type="button" class="btn btn-danger">Hapus</a>
                        </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
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
