@extends('dashboard')

@section('menuatas')
<a href="{{ url('kelas') }}" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Kelas
@endsection

@section('isi')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1000px">
            <form action="datakelas" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="id_kelas" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id_kelas" name="id_kelas">
                </div>
                <div class="mb-2">
                    <label for="tingkat_kelas" class="form-label">Tingkat Kelas</label>
                    <input type="text" class="form-control" id="tingkat_kelas" name="tingkat_kelas">
                </div>
                <div class="mb-2">
                    <label for="id_jurusan" class="form-label">Jurusan</label>
                    <select class="form-control" name="id_jurusan" aria-label="Default select example">
                        <option selected>Pilih Jurusan</option>
                        @foreach($tb_kelas as $data )
                        <option value="{{ $data->id_jurusan }}">{{ $data->nama_jurusan }}</option>
                        @endforeach
                      </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection