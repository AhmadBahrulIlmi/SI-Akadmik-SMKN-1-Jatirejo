@extends('dashboard')

@section('judul')
    Input Ekstrakulikuler
@endsection

@section('isi')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1000px">
            <form>
                <div class="mb-2">
                    <label for="exampleCheck1" class="form-label">Nama Ekstrakulikuler</label>
                    <input type="text" class="form-control" id="exampleCheck1" aria-describedby="exampleCheck1">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection