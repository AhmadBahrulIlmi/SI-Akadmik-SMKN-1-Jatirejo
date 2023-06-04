@extends('dashboard')

@section('menuatas')
<a href="{{ url('admin') }}" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Admin
@endsection

@section('isi')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1000px">
            <form action="dataadmin" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="id_admin" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id_admin" name="id_admin">
                </div>
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama">
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