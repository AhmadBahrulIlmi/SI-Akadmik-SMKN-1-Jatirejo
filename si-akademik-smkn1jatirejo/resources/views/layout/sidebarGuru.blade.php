<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ url('dataSiswa_Guru') }}" class="nav-link">
              <i class="nav-icon fas fa-id-badge"></i>
              <p>
                Data Siswa
              </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('nilaiSiswaGuru') }}" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p>
                Input Nilai Siswa
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('listMapel') }}" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p>
                Data Mata Pelajaran
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('listJadwal_Guru') }}" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p>
                Data Jadwal
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