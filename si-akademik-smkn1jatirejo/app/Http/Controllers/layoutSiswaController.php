<?php

namespace App\Http\Controllers;

use App\Models\tb_datamapel;
use App\Models\tb_datanilai;
use Illuminate\Http\Request;

class layoutSiswaController extends Controller
{
    public function biodataSiswa()
    {
        return view('DashSiswa.biodataSiswa');
    }
    public function biodataWali()
    {
        return view('DashSiswa.biodataWali');
    }
    public function nilaiSiswa()
    {
        $data = array(
            "data_mapel" => tb_datamapel::all(),
            "data_nilai" => tb_datanilai::all()
        );
        return view('DashSiswa.nilaiSiswa', $data);
    }
    public function jadwalSiswa()
    {
        return view('DashSiswa.jadwalSiswa');
    }
    public function mapelSiswa()
    {
        $data = array(
            "data_mapel" => tb_datamapel::all(),
        );
        return view('DashSiswa.mapelSiswa', $data);
    }
    public function kelasSiswa()
    {
        return view('DashSiswa.kelasSiswa');
    }
    public function kegiatanSiswa()
    {
        return view('DashSiswa.kegiatanSiswa');
    }
}