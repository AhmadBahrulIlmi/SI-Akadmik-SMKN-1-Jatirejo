<?php

use App\Http\Controllers\dataKelasController;
use App\Http\Controllers\dataMapelController;
use App\Http\Controllers\dataJurusanController;
use App\Http\Controllers\dataTahunController;
use App\Http\Controllers\dataJadwalController;
use App\Http\Controllers\dataNilaiController;
use App\Http\Controllers\dataWaliController;
use App\Http\Controllers\dataAdminController;
use App\Http\Controllers\dataGuruController;
use App\Http\Controllers\dataSiswa;
use App\Http\Controllers\Layout;
use App\Http\Controllers\layoutSiswaController;
use App\Http\Controllers\layoutGuruController;
use App\Http\Controllers\LoginController;
use App\Models\tb_siswa;
use App\Models\tb_guru;
use App\Models\tb_admin;
use App\Models\tb_walimurid;
use App\Models\tb_datanilai;
use App\Http\Middleware\User;
use App\Http\Middleware\Siswa;
use App\Http\Middleware\Guru;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Layout::class, 'home']);
//route untuk login dengan admin
Route::post('/do_login', [LoginController::class, 'on_login']);
Route::post('/do_logout', [LoginController::class, 'on_logout']);


Route::middleware([User::class])->group(function () {
    Route::controller(Layout::class)->group(function () {
        Route::get('home', 'home');
        Route::get('dashboard', 'dashboard');
        Route::get('tahunajaran', 'tahunajaran');
        Route::get('siswa', 'siswa')->name('siswa');
        Route::get('tambahdatasiswa', 'tambahdatasiswa');
        Route::get('guru', 'guru')->name('guru');
        Route::get('tambahdataguru', 'tambahdataguru');
        Route::get('admin', 'admin')->name('admin');
        Route::get('tambahdataadmin', 'tambahdataadmin');
        Route::get('walimurid', 'walimurid')->name('walimurid');
        Route::get('tambahdatawali', 'tambahdatawali');
        Route::get('nilai', 'nilai')->name('nilai');
        Route::get('tambahdatanilai', 'tambahdatanilai');
        Route::get('jadwal', 'jadwal')->name('jadwal');
        Route::get('tambahdatajadwal', 'tambahdatajadwal');
        Route::get('tahunajaran', 'tahunajaran')->name('tahunajaran');
        Route::get('jurusan', 'jurusan')->name('jurusan');
        Route::get('tambahdatajurusan', 'tambahdatajurusan');
        Route::get('mapel', 'mapel')->name('mapel');
        Route::get('tambahdatamapel', 'tambahdatamapel');
        Route::get('kelas', 'kelas')->name('kelas');
        Route::get('tambahdatakelas', 'tambahdatakelas');
        Route::get('kegiatan', 'kegiatan');
    });
});
Route::get('/masuk', function () {
    return view('masuk');
});
//endroute


Auth::routes();

Route::get('/siswa', [dataSiswa::class, 'siswa'])->name('siswa');
Route::post('/datasiswa', [dataSiswa::class, 'insert'])->name('datasiswa');
Route::get('/tambahdatasiswa', [dataSiswa::class, 'create'])->name('tambahdatasiswa');
Route::get('/datasiswaedit/{id_siswa}', [dataSiswa::class, 'edit'])->name('datasiswaedit');
Route::post('/datasiswaupdate/{id_siswa}', [dataSiswa::class, 'update'])->name('datasiswaupdate');
Route::get('/datasiswadelete/{id_siswa}', [dataSiswa::class, 'delete'])->name('datasiswadelete');
Route::get('/siswaPDF', [dataSiswa::class, 'exportPDF'])->name('siswaPDF');
Auth::routes();

Route::get('/guru', [dataGuruController::class, 'guru'])->name('guru');
Route::post('/dataguru', [dataGuruController::class, 'insert'])->name('dataguru');
Route::get('/tambahdataguru', [dataGuruController::class, 'create'])->name('tambahdataguru');
Route::get('/dataguruedit/{id_guru}', [dataGuruController::class, 'edit'])->name('dataguruedit');
Route::post('/dataguruupdate/{id_guru}', [dataGuruController::class, 'update'])->name('dataguruupdate');
Route::get('/datagurudelete/{id_guru}', [dataGuruController::class, 'delete'])->name('datagurudelete');
Route::get('/guruPDF', [dataGuruController::class, 'exportPDF'])->name('guruPDF');

Auth::routes();

Route::get('/admin', [dataAdminController::class, 'admin'])->name('admin');
Route::post('/dataadmin', [dataAdminController::class, 'insert'])->name('dataadmin');
Route::get('/tambahdataadmin', [dataAdminController::class, 'create'])->name('tambahdataadmin');
Route::get('/dataadminedit/{id_admin}', [dataAdminController::class, 'edit'])->name('dataadminedit');
Route::post('/dataadminupdate/{id_admin}', [dataAdminController::class, 'update'])->name('dataadminupdate');
Route::get('/dataadmindelete/{id_admin}', [dataAdminController::class, 'delete'])->name('dataadmindelete');
Route::get('/adminPDF', [dataAdminController::class, 'exportPDF'])->name('adminPDF');

Auth::routes();

Route::get('/walimurid', [dataWaliController::class, 'walimurid'])->name('walimurid');
Route::post('/datawali', [dataWaliController::class, 'insert'])->name('datawali');
Route::get('/tambahdatawali', [dataWaliController::class, 'create'])->name('tambahdatawali');
Route::get('/datawaliedit/{id_wali}', [dataWaliController::class, 'edit'])->name('datawaliedit');
Route::post('/datawaliupdate/{id_wali}', [dataWaliController::class, 'update'])->name('datawaliupdate');
Route::get('/datawalidelete/{id_wali}', [dataWaliController::class, 'delete'])->name('datawalidelete');
Route::get('/waliPDF', [dataWaliController::class, 'exportPDF'])->name('waliPDF');

Auth::routes();

Route::get('/nilai', [dataNilaiController::class, 'nilai'])->name('nilai');
Route::post('/datanilai', [dataNilaiController::class, 'insert'])->name('datanilai');
Route::get('/tambahdatanilai', [dataNilaiController::class, 'create'])->name('tambahdatanilai');
Route::get('/datanilaiedit/{id_nilai}', [dataNilaiController::class, 'edit'])->name('datanilaiedit');
Route::post('/datanilaiupdate/{id_nilai}', [dataNilaiController::class, 'update'])->name('datanilaiupdate');
Route::get('/datanilaidelete/{id_nilai}', [dataNilaiController::class, 'delete'])->name('datanilaidelete');
Route::get('/nilaiPDF', [dataNilaiController::class, 'exportPDF'])->name('nilaiPDF');

Auth::routes();

Route::get('/jadwal', [dataJadwalController::class, 'jadwal'])->name('jadwal');
Route::post('/datajadwal', [dataJadwalController::class, 'insert'])->name('datajadwal');
Route::get('/tambahdatajadwal', [dataJadwalController::class, 'create'])->name('tambahdatajadwal');
Route::get('/datajadwaledit/{id_jadwal}', [dataJadwalController::class, 'edit'])->name('datajadwaledit');
Route::post('/datajadwalupdate/{id_jadwal}', [dataJadwalController::class, 'update'])->name('datajadwalupdate');
Route::get('/datajadwaldelete/{id_jadwal}', [dataJadwalController::class, 'delete'])->name('datajadwaldelete');
Route::get('/jadwalPDF', [dataJadwalController::class, 'exportPDF'])->name('jadwalPDF');

Route::get('/tahunajaran', [dataTahunController::class, 'tahunajaran'])->name('tahunajaran');
Route::post('/datatahun', [dataTahunController::class, 'insert'])->name('datatahun');
Route::get('/tahunajaran', [dataTahunController::class, 'create'])->name('tahunajaran');

Route::get('/jurusan', [dataJurusanController::class, 'jurusan'])->name('jurusan');
Route::post('/datajurusan', [dataJurusanController::class, 'insert'])->name('datajurusan');
Route::get('/tambahdatajurusan', [dataJurusanController::class, 'create'])->name('tambahdatajurusan');
Route::get('/datajurusanedit/{id_jurusan}', [dataJurusanController::class, 'edit'])->name('datajurusanedit');
Route::post('/datajurusanupdate/{id_jurusan}', [dataJurusanController::class, 'update'])->name('datajurusanupdate');
Route::get('/datajurusandelete/{id_jurusan}', [dataJurusanController::class, 'delete'])->name('datajurusandelete');
Route::get('/jurusanPDF', [dataJurusanController::class, 'exportPDF'])->name('jurusanPDF');

Route::get('/mapel', [dataMapelController::class, 'mapel'])->name('mapel');
Route::post('/datamapel', [dataMapelController::class, 'insert'])->name('datamapel');
Route::get('/tambahdatamapel', [dataMapelController::class, 'create'])->name('tambahdatamapel');
Route::get('/datamapeledit/{id_mapel}', [dataMapelController::class, 'edit'])->name('datamapeledit');
Route::post('/datamapelupdate/{id_mapel}', [dataMapelController::class, 'update'])->name('datamapelupdate');
Route::get('/datamapeldelete/{id_mapel}', [dataMapelController::class, 'delete'])->name('datamapeldelete');
Route::get('/mapelPDF', [dataMapelController::class, 'exportPDF'])->name('mapelPDF');

Route::get('/kelas', [dataKelasController::class, 'kelas'])->name('kelas');
Route::post('/datakelas', [dataKelasController::class, 'insert'])->name('datakelas');
Route::get('/tambahdatakelas', [dataKelasController::class, 'create'])->name('tambahdatakelas');
Route::get('/datakelasedit/{id_kelas}', [dataKelasController::class, 'edit'])->name('datakelasedit');
Route::post('/datakelasupdate/{id_kelas}', [dataKelasController::class, 'update'])->name('datakelasupdate');
Route::get('/datakelasdelete/{id_kelas}', [dataKelasController::class, 'delete'])->name('datakelasdelete');
Route::get('/kelasPDF', [dataKelasController::class, 'exportPDF'])->name('kelasPDF');

//route untuk login dengan siswa
Route::middleware([Siswa::class])->group(function () {
    Route::get('/dashsiswa', function () {
        return view('dashsiswa');
    });
    Route::controller(layoutSiswaController::class)->group(function () {
        Route::get('biodataSiswa', 'biodataSiswa');
        Route::get('biodataWali', 'biodataWali');
        Route::get('nilaiSiswa', 'nilaiSiswa');
        Route::get('jadwalSiswa', 'jadwalSiswa');
        Route::get('mapelSiswa', 'mapelSiswa');
        Route::get('kelasSiswa', 'kelasSiswa');
        Route::get('kegiatanSiswa', 'kegiatanSiswa');
    });
});
//endroute



//route untuk login dengan guru
Route::middleware([Guru::class])->group(function () {
    Route::get('/dashguru', function () {
        return view('dashguru');
    });
    Route::controller(layoutGuruController::class)->group(function () {
        Route::get('dataSiswa_Guru', 'dataSiswa_Guru');
        Route::get('nilaiSiswaGuru', 'nilaiSiswaGuru')->name('nilaiSiswaGuru');
        Route::get('inputNilaiSiswa', 'inputNilaiSiswa');
        Route::get('listJadwal_Guru', 'listJadwal_Guru');
        Route::get('listMapel', 'listMapel');
    });
});
Route::get('/inputNilaiSiswa', [dataNilaiController::class, 'inputNilaiSiswa'])->name('inputNilaiSiswa');
Route::post('/dataNilaiSiswa', [dataNilaiController::class, 'insert2'])->name('dataNilaiSiswa');
Route::get('/inputNilaiSiswa', [dataNilaiController::class, 'create2'])->name('inputNilaiSiswa');
Route::get('/datanilai2edit/{id_nilai}', [dataNilaiController::class, 'edit2'])->name('datanilai2edit');
Route::post('/datanilai2update/{id_nilai}', [dataNilaiController::class, 'update2'])->name('datanilai2update');
Route::get('/datanilai2delete/{id_nilai}', [dataNilaiController::class, 'delete2'])->name('datanilai2delete');
Route::get('/nilaiPDF', [dataNilaiController::class, 'exportPDF'])->name('nilaiPDF');
//endroute