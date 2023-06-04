@extends('dashboard')

@section('menuatas')
<a href="{{ url('mapel') }}" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Mapel
@endsection

@section('isi')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1000px">
            <form action="datamapel" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="id_mapel" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id_mapel" name="id_mapel">
                </div>
                <div class="mb-2">
                    <label for="nama_mapel" class="form-label">Nama Mata Pelajaran</label>
                    <input type="text" class="form-control" id="nama_mapel" name="nama_mapel">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection