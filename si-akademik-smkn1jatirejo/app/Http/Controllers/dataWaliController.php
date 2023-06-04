<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\tb_siswa;
use App\Models\tb_walimurid;
use Illuminate\Http\Request;

class dataWaliController extends Controller
{
    public function walimurid()
    {
        $tb_wali = tb_walimurid::get();
        if (request('search')) {
            $tb_wali = tb_walimurid::where('id_wali', 'LIKE', '%' . request('search') . '%')
                ->orWhere('nama', 'LIKE', '%' . request('search') . '%')
                ->orWhere('no_telp', 'LIKE', '%' . request('search') . '%')
                ->orWhere('alamat', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_wali = tb_walimurid::all();
        }
        return view('datawali.walimurid', compact('tb_wali'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tb_wali = tb_siswa::get();
        return view('datawali.tambahdatawali', compact('tb_wali'));
    }

    public function insert(Request $request)
    {
        tb_walimurid::create($request->all());
        return redirect()->route('walimurid')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_wali)
    {
        $tb_wali = tb_walimurid::find($id_wali);
        $tb_waliedit = tb_siswa::get();
        return view('datawali.editdatawali', compact('tb_wali', 'tb_waliedit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_wali)
    {
        $tb_wali = tb_walimurid::find($id_wali);
        $tb_wali->update($request->all());
        return redirect()->route('walimurid')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_wali)
    {
        $tb_wali = tb_walimurid::find($id_wali);
        $tb_wali->delete();
        return redirect()->route('walimurid')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_wali = tb_walimurid::all();
        view()->share('datawali', $tb_wali);
        $pdf = PDF::loadview('datawali.printdatawali', compact('tb_wali'));
        return $pdf->stream('datawali.pdf');
    }
}