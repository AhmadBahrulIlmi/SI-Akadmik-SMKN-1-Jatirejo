<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_datanilai;

class layoutGuruController extends Controller
{
    public function dataSiswa_Guru()
    {
        return view('DashGuru.dataSiswa_Guru');
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
        return view('DashGuru.listMapel');
    }
    public function listJadwal_Guru()
    {
        return view('DashGuru.listJadwal_Guru');
    }
}