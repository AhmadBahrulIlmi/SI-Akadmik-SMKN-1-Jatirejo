<?php

namespace App\Http\Controllers;

use App\Models\tb_datajurusan;
use Illuminate\Http\Request;
use PDF;

class dataJurusanController extends Controller
{
    public function jurusan()
    {
        if (request('search')) {
            $tb_jurusan = tb_datajurusan::where('id_jurusan', 'LIKE', '%' . request('search') . '%')
                ->orWhere('nama_jurusan', 'LIKE', '%' . request('search') . '%')
                ->paginate(5);
        } else {
            $tb_jurusan = tb_datajurusan::all();
        }
        return view('datajurusan.jurusan', compact('tb_jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('datajurusan.tambahdatajurusan');
    }

    public function insert(Request $request)
    {
        tb_datajurusan::create($request->all());
        return redirect()->route('jurusan')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_jurusan)
    {
        $tb_jurusan = tb_datajurusan::find($id_jurusan);
        return view('datajurusan.editdatajurusan', compact('tb_jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_jurusan)
    {
        $tb_jurusan = tb_datajurusan::find($id_jurusan);
        $tb_jurusan->update($request->all());
        return redirect()->route('jurusan')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_jurusan)
    {
        $tb_jurusan = tb_datajurusan::find($id_jurusan);
        $tb_jurusan->delete();
        return redirect()->route('jurusan')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_jurusan = tb_datajurusan::all();
        view()->share('datajurusan', $tb_jurusan);
        $pdf = PDF::loadview('datajurusan.printdatajurusan', compact('tb_jurusan'));
        return $pdf->stream('datajurusan.pdf');
    }
}