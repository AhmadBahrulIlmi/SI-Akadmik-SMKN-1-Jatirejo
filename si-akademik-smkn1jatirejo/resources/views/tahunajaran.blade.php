@extends('dashboard')

@section('judul')
    Tahun Ajaran
@endsection

@section('isi')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1000px">
            <form action="datatahun" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="tahun" class="form-label">Tahun Ajaran</label>
                    <input type="year" class="form-control" id="tahun" name="tahun">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</div>
@endsection