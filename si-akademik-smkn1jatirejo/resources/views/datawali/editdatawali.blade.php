@extends('dashboard')

@section('menuatas')
<a href="{{ url('walimurid') }}" class="nav-link">Back</a>
@endsection

@section('judul')
    Ubah Data Wali Murid
@endsection

@section('isi')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1000px">
            <form action="/datawaliupdate/{{ $tb_wali->id_wali }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="id_wali" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id_wali" name="id_wali"value="{{ $tb_wali->id_wali}}">
                </div>
                <div class="mb-2">
                    <label for="nama_wali" class="form-label">Nama Wali</label>
                    <input type="text" class="form-control" id="nama" name="nama"value="{{ $tb_wali->nama}}">
                </div>
                <div class="mb-2">
                    <label for="id_siswa" class="form-label">Nama Siswa</label>
                    <select class="form-control" name="id_siswa" aria-label="Default select example">
                        <option selected>Pilih Siswa</option>
                        @foreach($tb_waliedit as $data )
                        <option value="{{ $data->id_siswa }}" {{ $data->id_siswa == $tb_wali->id_siswa ? 'selected' : '' }}>{{ $data->nama }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="no_telp" class="form-label">No Tlp</label>
                    <input type="number" class="form-control"id="no_telp" name="no_telp"value="{{ $tb_wali->no_telp}}">
                </div>
                <div class="mb-2">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $tb_wali->alamat}}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection