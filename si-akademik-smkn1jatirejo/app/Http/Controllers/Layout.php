<?php

namespace App\Http\Controllers;

use App\Models\tb_datamapel;
use App\Models\tb_datajurusan;
use App\Models\tb_datatahun;
use App\Models\tb_datajadwal;
use App\Models\tb_datanilai;
use Illuminate\Http\Request;
use App\Models\tb_siswa;
use App\Models\tb_guru;
use App\Models\tb_admin;
use App\Models\tb_walimurid;
use App\Models\tb_kelas;

class Layout extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function siswa()
    {
        $tb_siswa = tb_siswa::paginate(5);
        return view('datasiswa.siswa', compact('tb_siswa'));
    }
    public function tambahdatasiswa()
    {
        return view('tambahdatasiswa');
    }
    public function guru()
    {
        $tb_guru = tb_guru::all();
        return view('dataguru.guru', compact('tb_guru'));
    }
    public function tambahdataguru()
    {
        return view('tambahdataguru');
    }
    public function admin()
    {
        $tb_admin = tb_admin::all();
        return view('dataadmin.admin', compact('tb_admin'));
    }
    public function tambahdataadmin()
    {
        return view('tambahdataadmin');
    }
    public function walimurid()
    {
        $tb_wali = tb_walimurid::all();
        return view('datawali.walimurid', compact('tb_wali_murid'));
    }
    public function tambahdatawali()
    {
        return view('tambahdatawali');
    }
    public function nilai()
    {
        $tb_nilai = tb_datanilai::all();
        return view('datanilai.nilai', compact('tb_nilai'));
    }
    public function tambahdatanilai()
    {
        return view('tambahdatanilai');
    }
    public function jadwal()
    {
        $tb_jadwal = tb_datajadwal::all();
        return view('datajadwal.jadwal', compact('tb_jadwal'));
    }
    public function tambahdatajadwal()
    {
        return view('tambahdatajadwal');
    }
    public function tahunajaran()
    {
        $tb_tahun = tb_datatahun::all();
        return view('tahunajaran', compact('tb_tahun_ajaran'));
    }
    public function jurusan()
    {
        $tb_jurusan = tb_datajurusan::all();
        return view('datajurusan.jurusan', compact('tb_jurusan'));
    }
    public function tambahdatajurusan()
    {
        return view('tambahdatajurusan');
    }
    public function mapel()
    {
        $tb_mapel = tb_datamapel::all();
        return view('datamapel.mapel', compact('tb_mapel'));
    }
    public function tambahdatamapel()
    {
        return view('tambahdatamapel');
    }
    public function kelas()
    {
        $tb_kelas = tb_kelas::all();
        return view('datakelas.kelas', compact('tb_kelas'));
    }
    public function tambahdatakelas()
    {
        return view('tambahdatakelas');
    }
    public function kegiatan()
    {
        return view('kegiatan');
    }
    public function masuk()
    {
        return view('masuk');
    }
}