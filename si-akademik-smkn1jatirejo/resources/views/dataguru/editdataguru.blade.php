@extends('dashboard')

@section('menuatas')
<a href="{{ url('guru') }}" class="nav-link">Back</a>
@endsection

@section('judul')
    Ubah Data Guru
@endsection

@section('isi')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1000px">
            <form action="/dataguruupdate/{{ $tb_guru->id_guru }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="id_guru" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id_guru" name="id_guru"value="{{ $tb_guru->id_guru}}">
                </div>
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama"value="{{ $tb_guru->nama}}">
                </div>
                <div class="mb-2">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example" >
                        @switch($tb_guru->jenis_kelamin)
                        @case("Laki-laki")
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                            @break
                            @case("Perempuan")
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-laki">Laki-laki</option>
                            @break
                    @endswitch
                      </select>
                </div>
                <div class="mb-2">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $tb_guru->tgl_lahir}}">
                </div>
                <div class="mb-2">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" value="{{ $tb_guru->agama}}">
                </div>
                <div class="mb-2">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $tb_guru->alamat}}">
                </div>
                <div class="mb-2">
                    <label for="no_tlp" class="form-label">No Tlp</label>
                    <input type="number" class="form-control"id="no_tlp" name="no_tlp"value="{{ $tb_guru->no_tlp}}">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control"id="email" name="email"value="{{ $tb_guru->email}}">
                </div>
                <div class="mb-2">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control"id="jabatan" name="jabatan"value="{{ $tb_guru->no_tlp}}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection