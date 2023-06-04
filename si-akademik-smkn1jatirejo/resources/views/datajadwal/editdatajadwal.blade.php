@extends('dashboard')

@section('menuatas')
<a href="{{ url('jadwal') }}" class="nav-link">Back</a>
@endsection

@section('judul')
    Ubah Data Jadwal
@endsection

@section('isi')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1000px">
            <form action="/datajadwalupdate/{{ $tb_jadwal->id_jadwal }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="hari" class="form-label">Hari</label>
                    <input type="day" class="form-control" id="hari" name="hari"value="{{ $tb_jadwal->hari}}">
                </div>
                <div class="mb-2">
                    <label for="jam" class="form-label">Jam</label>
                    <input type="time" class="form-control" id="jam" name="jam"value="{{ $tb_jadwal->jam}}">
                </div>
                <div class="mb-2">
                    <label for="id_jurusan" class="form-label">Jurusan</label>
                    <select class="form-control" name="id_jurusan" aria-label="Default select example">
                        <option selected>Pilih Jurusan</option>
                        @foreach($tb_jurusan as $data )
                        <option value="{{ $data->id_jurusan }}" {{ $data->id_jurusan == $tb_jadwal->nama_jurusan ? 'selected' : '' }}>{{ $data->nama_jurusan }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="id_mapel" class="form-label">Mata Pelajaran</label>
                    <select class="form-control" name="id_mapel" aria-label="Default select example">
                        <option selected>Pilih Mata Pelajaran</option>
                        @foreach($tb_mapel as $data )
                        <option value="{{ $data->id_mapel }}" {{ $data->id_mapel == $tb_jadwal->nama_mapel ? 'selected' : '' }}>{{ $data->nama_mapel }}</option>
                        @endforeach
                      </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection