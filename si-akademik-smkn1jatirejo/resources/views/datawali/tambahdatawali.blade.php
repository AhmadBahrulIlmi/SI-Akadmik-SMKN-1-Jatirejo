@extends('dashboard')

@section('menuatas')
<a href="{{ url('walimurid') }}" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Wali Murid
@endsection

@section('isi')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1000px">
            <form action="datawali" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="id_wali" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id_wali" name="id_wali">
                </div>
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-2">
                    <label for="id_siswa" class="form-label">Nama Siswa</label>
                    <select class="form-control" name="id_siswa" aria-label="Default select example">
                        <option selected>Pilih Siswa</option>
                        @foreach($tb_wali as $data )
                        <option value="{{ $data->id_siswa }}">{{ $data->nama }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="no_telp" class="form-label">No Tlp</label>
                    <input type="number" class="form-control" name="no_telp">
                </div>
                <div class="mb-2">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection