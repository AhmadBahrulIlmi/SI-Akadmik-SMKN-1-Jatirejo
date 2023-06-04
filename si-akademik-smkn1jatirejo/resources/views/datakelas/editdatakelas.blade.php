@extends('dashboard')

@section('menuatas')
<a href="{{ url('jurusan') }}" class="nav-link">Back</a>
@endsection

@section('judul')
    Ubah Data Jurusan
@endsection

@section('isi')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1000px">
            <form action="/datakelasupdate/{{ $tb_kelas->id_kelas }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="id_kelas" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id_kelas" name="id_kelas"value="{{ $tb_kelas->id_kelas}}">
                </div>
                <div class="mb-2">
                    <label for="tingkat_kelas" class="form-label">Tingkat Kelas</label>
                    <input type="text" class="form-control" id="tingkat_kelas" name="tingkat_kelas"value="{{ $tb_kelas->tingkat_kelas}}">
                </div>
                <div class="mb-2">
                    <label for="id_jurusan" class="form-label">Jurusan</label>
                    <select class="form-control" name="id_jurusan" aria-label="Default select example">
                        <option selected>Pilih Jurusan</option>
                        @foreach($tb_kelasedit as $data )
                        <option value="{{ $data->id_jurusan }}" {{ $data->id_jurusan == $tb_kelas->id_jurusan? 'selected' : '' }}>{{ $data->nama_jurusan }}</option>
                        @endforeach
                      </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection