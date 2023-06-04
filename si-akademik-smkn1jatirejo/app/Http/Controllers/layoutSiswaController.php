<?php

namespace App\Http\Controllers;

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
        return view('DashSiswa.nilaiSiswa');
    }
    public function jadwalSiswa()
    {
        return view('DashSiswa.jadwalSiswa');
    }
    public function mapelSiswa()
    {
        return view('DashSiswa.mapelSiswa');
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