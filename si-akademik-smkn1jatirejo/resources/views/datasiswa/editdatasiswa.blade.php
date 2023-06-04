@extends('dashboard')

@section('menuatas')
<a href="{{ url('siswa') }}" class="nav-link">Back</a>
@endsection

@section('judul')
    Ubah Data Siswa
@endsection

@section('isi')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1000px">
            <form action="/datasiswaupdate/{{ $tb_siswa->id_siswa }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="id_siswa" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id_siswa" name="id_siswa"value="{{ $tb_siswa->id_siswa}}">
                </div>
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama"value="{{ $tb_siswa->nama}}">
                </div>
                <div class="mb-2">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example" >
                        @switch($tb_siswa->jenis_kelamin)
                        @case("Laki-laki")
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                            @break
                            @case("Perempuan")
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-laki">Laki-laki</option>
                            @break
                    @endswitch
                      </select>
                </div>
                <div class="mb-2">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $tb_siswa->tgl_lahir}}">
                </div>
                <div class="mb-2">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" value="{{ $tb_siswa->agama}}">
                </div>
                <div class="mb-2">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $tb_siswa->alamat}}">
                </div>
                <div class="mb-2">
                    <label for="no_tlp" class="form-label">No Tlp</label>
                    <input type="number" class="form-control"id="no_tlp" name="no_tlp"value="{{ $tb_siswa->no_tlp}}">
                </div>
                <div class="mb-2">
                    <label for="id_kelas" class="form-label">Tingkat Kelas</label>
                    <select class="form-control" name="id_kelas" aria-label="Default select example">
                        <option selected>Pilih Tingkat Kelas</option>
                        @foreach($tb_siswaedit as $data )
                        <option value="{{ $data->id_kelas }}" {{ $data->id_kelas == $tb_siswa->id_kelas ? 'selected' : '' }}>{{ $data->tingkat_kelas }}</option>
                        @endforeach
                      </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection