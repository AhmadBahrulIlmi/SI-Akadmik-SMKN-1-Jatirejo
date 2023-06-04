<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ url('biodataSiswa') }}" class="nav-link">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Biodata Siswa
              </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('biodataWali') }}" class="nav-link">
              <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Data Wali Murid
              </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-info-circle"></i>
            <p>
                Informasi Sekolah
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('nilaiSiswa') }}" class="nav-link">
                <i class="fas fa-clipboard-check"></i>
                <p>Nilai</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('jadwalSiswa') }}" class="nav-link">
                <i class="fas fa-clipboard-list"></i>
                <p>Jadwal</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('mapelSiswa') }}" class="nav-link">
                <i class="fas fa-clipboard-list"></i>
                <p>Mata Pelajaran</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('kelasSiswa') }}" class="nav-link">
                <i class="fas fa-clipboard-list"></i>
                <p>Kelas</p>
                </a>
            </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ url('kegiatanSiswa') }}" class="nav-link">
            <i class="nav-icon fas fa-sticky-note"></i>
            <p>
                Ekstrakulikuler
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