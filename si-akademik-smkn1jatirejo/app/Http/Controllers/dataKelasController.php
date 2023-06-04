<?php

namespace App\Http\Controllers;

use App\Models\tb_datajurusan;
use App\Models\tb_kelas;
use Illuminate\Http\Request;
use PDF;

class dataKelasController extends Controller
{
    public function kelas()
    {
        $tb_kelas = tb_datajurusan::get();
        if (request('search')) {
            $tb_kelas = tb_kelas::where('id_kelas', 'LIKE', '%' . request('search') . '%')
                ->orWhere('tingkat_kelas', 'LIKE', '%' . request('search') . '%')
                ->orWhere('id_jurusan', 'LIKE', '%' . request('search') . '%')
                ->paginate(5);
        } else {
            $tb_kelas = tb_kelas::all();
        }
        return view('datakelas.kelas', compact('tb_kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tb_kelas = tb_datajurusan::get();
        return view('datakelas.tambahdatakelas', compact('tb_kelas'));
    }

    public function insert(Request $request)
    {
        tb_kelas::create($request->all());
        return redirect()->route('kelas')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_kelas)
    {
        $tb_kelas = tb_kelas::find($id_kelas);
        $tb_kelasedit = tb_datajurusan::get();
        return view('datakelas.editdatakelas', compact('tb_kelas', 'tb_kelasedit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_kelas)
    {
        $tb_kelas = tb_kelas::find($id_kelas);
        $tb_kelas->update($request->all());
        return redirect()->route('kelas')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_kelas)
    {
        $tb_kelas = tb_kelas::find($id_kelas);
        $tb_kelas->delete();
        return redirect()->route('kelas')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_kelas = tb_kelas::all();
        $tb_jurusan = tb_datajurusan::get();
        view()->share('datakelas', $tb_kelas);
        $pdf = PDF::loadview('datakelas.printdatakelas', compact('tb_kelas', 'tb_jurusan'));
        return $pdf->stream('datakelas.pdf');
    }
}