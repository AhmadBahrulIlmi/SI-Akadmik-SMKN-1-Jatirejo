@extends('dashboard')

@section('menuatas')
<a href="{{ url('nilai') }}" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Nilai
@endsection

@section('isi')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1000px">
            <form action="datanilai" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="semester" class="form-label">Semester</label>
                    <input type="text" class="form-control" id="semester" name="semester">
                </div>
                <div class="mb-2">
                    <label for="id_siswa" class="form-label">Nama Siswa</label>
                    <select class="form-control" name="id_siswa" aria-label="Default select example">
                        <option selected>Pilih Siswa</option>
                        @foreach($tb_siswa as $data )
                        <option value="{{ $data->id_siswa }}">{{ $data->nama }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="id_mapel" class="form-label">Mata Pelajaran</label>
                    <select class="form-control" name="id_mapel" aria-label="Default select example">
                        <option selected>Pilih Mata Pelajaran</option>
                        @foreach($tb_mapel as $data )
                        <option value="{{ $data->id_mapel }}">{{ $data->nama_mapel }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="tugas1" class="form-label">Tugas 1</label>
                    <input type="number" class="form-control" id="tugas1" name="tugas1">
                </div>
                <div class="mb-2">
                    <label for="tugas2" class="form-label">Tugas 2</label>
                    <input type="number" class="form-control" id="tugas2" name="tugas2">
                </div>
                <div class="mb-2">
                    <label for="tugas3" class="form-label">Tugas 3</label>
                    <input type="number" class="form-control" id="tugas3" name="tugas3">
                </div>
                <div class="mb-2">
                    <label for="uts" class="form-label">UTS</label>
                    <input type="number" class="form-control" id="uts" name="uts">
                </div>
                <div class="mb-2">
                    <label for="uas" class="form-label">UAS</label>
                    <input type="number" class="form-control" id="uas" name="uas">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection