<?php

namespace App\Http\Controllers;

use App\Models\tb_datajadwal;
use App\Models\tb_datajurusan;
use App\Models\tb_datamapel;
use Illuminate\Http\Request;
use PDF;

class dataJadwalController extends Controller
{
    public function jadwal()
    {
        $tb_jadwal = tb_datajadwal::get();
        if (request('search')) {
            $tb_jadwal = tb_datajadwal::where('id_jadwal', 'LIKE', '%' . request('search') . '%')
                ->orWhere('hari', 'LIKE', '%' . request('search') . '%')
                ->orWhere('jam', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_jadwal = tb_datajadwal::all();
        }
        return view('datajadwal.jadwal', compact('tb_jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tb_jadwal = tb_datajadwal::get();
        $tb_jurusan = tb_datajurusan::get();
        $tb_mapel = tb_datamapel::get();
        return view('datajadwal.tambahdatajadwal', compact('tb_jadwal', 'tb_mapel', 'tb_jurusan'));
    }

    public function insert(Request $request)
    {
        tb_datajadwal::create($request->all());
        return redirect()->route('jadwal')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_jadwal)
    {
        $tb_jadwal = tb_datajadwal::find($id_jadwal);
        $tb_jurusan = tb_datajurusan::get();
        $tb_mapel = tb_datamapel::get();
        return view('datajadwal.editdatajadwal', compact('tb_jadwal', 'tb_mapel', 'tb_jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_jadwal)
    {
        $tb_jadwal = tb_datajadwal::find($id_jadwal);
        $tb_jadwal->update($request->all());
        return redirect()->route('jadwal')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_jadwal)
    {
        $tb_jadwal = tb_datajadwal::find($id_jadwal);
        $tb_jadwal->delete();
        return redirect()->route('jadwal')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_jadwal = tb_datajadwal::all();
        $tb_jurusan = tb_datajurusan::all();
        $tb_mapel = tb_datamapel::all();
        view()->share('datajadwal', $tb_jadwal);
        $pdf = PDF::loadview('datajadwal.printdatajadwal', compact('tb_jadwal', 'tb_mapel', 'tb_jurusan'));
        return $pdf->stream('datajadwal.pdf');
    }
}