<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-user"></i>
          <p>
            Input Data
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('siswa') }}" class="nav-link">
              <i class="fas fa-user"></i>
              <p>Data Siswa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('guru') }}" class="nav-link">
              <i class="fas fa-user"></i>
              <p>Data Guru</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin') }}" class="nav-link">
              <i class="fas fa-user"></i>
              <p>Data Admin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('walimurid') }}" class="nav-link">
              <i class="fas fa-user"></i>
              <p>Data Wali Murid</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="{{ url('nilai') }}" class="nav-link">
          <i class="nav-icon fas fa-clipboard"></i>
          <p>
            Nilai Siswa
          </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('jadwal') }}" class="nav-link">
          <i class="nav-icon fas fa-calendar"></i>
          <p>
            Jadwal
          </p>
        </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('tahunajaran') }}" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Tahun Ajaran
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('jurusan') }}" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Jurusan
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('mapel') }}" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Mata Pelajaran
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('kelas') }}" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Kelas
        </p>
      </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('kegiatan') }}" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Kegiatan
          </p>
        </a>
    </li>
    <li class="nav-item">
      <form action="/do_logout" method="post">
        @csrf
        <a href="{{ url('masuk') }}" class="nav-link">
          <i class="nav-icon fa fa-arrow-right"></i>
          <p>
            Logout
          </p>
        </a>
      </form>
    </li>
  </ul>
</nav>