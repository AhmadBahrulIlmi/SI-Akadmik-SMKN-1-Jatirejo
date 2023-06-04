@extends('dashboard')

@section('menuatas')
<a href="{{ url('jurusan') }}" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Jurusan
@endsection

@section('isi')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1000px">
            <form action="datajurusan" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="id_jurusan" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id_jurusan" name="id_jurusan">
                </div>
                <div class="mb-2">
                    <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
                    <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection