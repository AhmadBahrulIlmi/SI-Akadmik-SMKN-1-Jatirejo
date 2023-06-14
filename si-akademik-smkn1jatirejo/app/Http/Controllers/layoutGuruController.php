<?php

namespace App\Http\Controllers;

use App\Models\tb_datamapel;
use App\Models\tb_datanilai;
use App\Models\tb_siswa;
use Illuminate\Http\Request;

class layoutGuruController extends Controller
{
    public function dataSiswa_Guru()
    {
        $data = array(
            "data_siswa" => tb_siswa::all(),
        );
        return view('DashGuru.dataSiswa_Guru', $data);
    }
    public function nilaiSiswaGuru()
    {
        $tb_nilai = tb_datanilai::all();
        return view('DashGuru.nilaiSiswaGuru', compact('tb_nilai'));
    }
    public function inputNilaiSiswa()
    {
        return view('DashGuru.inputNilaiSiswa');
    }
    public function listMapel()
    {
        $data = array(
            "data_mapel" => tb_datamapel::all(),
        );
        return view('DashGuru.listMapel', $data);
    }
    public function listJadwal_Guru()
    {
        return view('DashGuru.listJadwal_Guru');
    }
}