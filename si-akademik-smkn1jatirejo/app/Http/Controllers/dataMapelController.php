<?php

namespace App\Http\Controllers;

use App\Models\tb_datamapel;
use Illuminate\Http\Request;
use PDF;

class dataMapelController extends Controller
{
    public function mapel()
    {
        if (request('search')) {
            $tb_mapel = tb_datamapel::where('id_mapel', 'LIKE', '%' . request('search') . '%')
                ->orWhere('nama_mapel', 'LIKE', '%' . request('search') . '%')
                ->paginate(5);
        } else {
            $tb_mapel = tb_datamapel::all();
        }
        return view('datamapel.mapel', compact('tb_mapel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('datamapel.tambahdatamapel');
    }

    public function insert(Request $request)
    {
        tb_datamapel::create($request->all());
        return redirect()->route('mapel')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_mapel)
    {
        $tb_mapel = tb_datamapel::find($id_mapel);
        return view('datamapel.editdatamapel', compact('tb_mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_mapel)
    {
        $tb_mapel = tb_datamapel::find($id_mapel);
        $tb_mapel->update($request->all());
        return redirect()->route('mapel')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_mapel)
    {
        $tb_mapel = tb_datamapel::find($id_mapel);
        $tb_mapel->delete();
        return redirect()->route('mapel')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_mapel = tb_datamapel::all();
        view()->share('datamapel', $tb_mapel);
        $pdf = PDF::loadview('datamapel.printdatamapel', compact('tb_mapel'));
        return $pdf->stream('datamapel.pdf');
    }
}