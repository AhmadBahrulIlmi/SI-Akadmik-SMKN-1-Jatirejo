<?php

namespace App\Http\Controllers;

use App\Models\tb_datamapel;
use App\Models\tb_datanilai;
use App\Models\tb_siswa;
use Illuminate\Http\Request;
use PDF;

class dataNilaiController extends Controller
{
    public function index()
    {
        $data = array(
            "data_mapel" => tb_datamapel::all(),
        );
        return view('DashSiswa.nilaiSiswa', $data);
    }
    public function nilai()
    {
        $tb_nilai = tb_datanilai::get();
        if (request('search')) {
            $tb_nilai = tb_datanilai::where('semester', 'LIKE', '%' . request('search') . '%')
                ->orWhere('tugas1', 'LIKE', '%' . request('search') . '%')
                ->orWhere('tugas2', 'LIKE', '%' . request('search') . '%')
                ->orWhere('tugas3', 'LIKE', '%' . request('search') . '%')
                ->orWhere('uts', 'LIKE', '%' . request('search') . '%')
                ->orWhere('uas', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_nilai = tb_datanilai::all();
        }
        return view('datanilai.nilai', compact('tb_nilai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tb_nilai = tb_datanilai::get();
        $tb_siswa = tb_siswa::get();
        $tb_mapel = tb_datamapel::get();
        return view('datanilai.tambahdatanilai', compact('tb_nilai', 'tb_siswa', 'tb_mapel'));
    }
    public function create2()
    {
        $tb_nilai = tb_datanilai::get();
        $tb_siswa = tb_siswa::get();
        $tb_mapel = tb_datamapel::get();
        return view('DashGuru.inputNilaiSiswa', compact('tb_nilai', 'tb_siswa', 'tb_mapel'));
    }

    public function insert(Request $request)
    {
        tb_datanilai::create($request->all());
        return redirect()->route('nilai')->with('input', 'Data Berhasil Ditambahkan !');
    }
    public function insert2(Request $request)
    {
        tb_datanilai::create($request->all());
        return redirect()->route('nilaiSiswaGuru')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_nilai)
    {
        $tb_nilai = tb_datanilai::find($id_nilai);
        $tb_siswa = tb_siswa::get();
        $tb_mapel = tb_datamapel::get();
        return view('datanilai.editdatanilai', compact('tb_nilai', 'tb_siswa', 'tb_mapel'));
    }
    public function edit2(string $id_nilai)
    {
        $tb_nilai = tb_datanilai::find($id_nilai);
        $tb_siswa = tb_siswa::get();
        $tb_mapel = tb_datamapel::get();
        return view('DashGuru.editNilaiSiswa', compact('tb_nilai', 'tb_siswa', 'tb_mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_nilai)
    {
        $tb_nilai = tb_datanilai::find($id_nilai);
        $tb_nilai->update($request->all());
        return redirect()->route('nilai')->with('edit', 'Data Berhasil Diubah !');
    }
    public function update2(Request $request, string $id_nilai)
    {
        $tb_nilai = tb_datanilai::find($id_nilai);
        $tb_nilai->update($request->all());
        return redirect()->route('nilaiSiswaGuru')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_nilai)
    {
        $tb_nilai = tb_datanilai::find($id_nilai);
        $tb_nilai->delete();
        return redirect()->route('nilai')->with('delete', 'Data Berhasil Dihapus !');
    }
    public function delete2(string $id_nilai)
    {
        $tb_nilai = tb_datanilai::find($id_nilai);
        $tb_nilai->delete();
        return redirect()->route('nilaiSiswaGuru')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_nilai = tb_datanilai::all();
        $tb_siswa = tb_siswa::all();
        $tb_mapel = tb_datamapel::all();
        view()->share('datanilai', $tb_nilai);
        $pdf = PDF::loadview('datanilai.printdatanilai', compact('tb_nilai', 'tb_siswa', 'tb_mapel'));
        return $pdf->stream('datanilai.pdf');
    }
}