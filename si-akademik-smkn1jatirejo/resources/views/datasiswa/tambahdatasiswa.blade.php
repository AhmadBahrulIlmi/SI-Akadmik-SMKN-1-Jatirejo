@extends('dashboard')

@section('menuatas')
<a href="{{ url('siswa') }}" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Siswa
@endsection

@section('isi')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1000px">
            <form action="datasiswa" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="id_siswa" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id_siswa" name="id_siswa">
                </div>
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-2">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" aria-label="Default select example">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                </div>
                <div class="mb-2">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir">
                </div>
                <div class="mb-2">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" class="form-control" name="agama">
                </div>
                <div class="mb-2">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="mb-2">
                    <label for="no_tlp" class="form-label">No Tlp</label>
                    <input type="number" class="form-control" name="no_tlp">
                </div>
                <div class="mb-2">
                    <label for="id_kelas" class="form-label">Tingkat Kelas</label>
                    <select class="form-control" name="id_kelas" aria-label="Default select example">
                        <option selected>Tingkat Kelas</option>
                        @foreach($tb_siswa as $data )
                        <option value="{{ $data->id_kelas }}">{{ $data->tingkat_kelas }}</option>
                        @endforeach
                      </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection