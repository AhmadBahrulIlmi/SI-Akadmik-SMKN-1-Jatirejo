<?php

namespace App\Http\Controllers;

use App\Models\tb_guru;
use Illuminate\Http\Request;
use PDF;

class dataGuruController extends Controller
{
    public function guru()
    {
        if (request('search')) {
            $tb_guru = tb_guru::where('id_guru', 'LIKE', '%' . request('search') . '%')
                ->orWhere('nama', 'LIKE', '%' . request('search') . '%')
                ->orWhere('jenis_kelamin', 'LIKE', '%' . request('search') . '%')
                ->orWhere('tgl_lahir', 'LIKE', '%' . request('search') . '%')
                ->orWhere('agama', 'LIKE', '%' . request('search') . '%')
                ->orWhere('alamat', 'LIKE', '%' . request('search') . '%')
                ->orWhere('no_tlp', 'LIKE', '%' . request('search') . '%')
                ->orWhere('email', 'LIKE', '%' . request('search') . '%')
                ->orWhere('jabatan', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_guru = tb_guru::all();
        }
        return view('dataguru.guru', compact('tb_guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dataguru.tambahdataguru');
    }

    public function insert(Request $request)
    {
        tb_guru::create($request->all());
        return redirect()->route('guru')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_guru)
    {
        $tb_guru = tb_guru::find($id_guru);
        return view('dataguru.editdataguru', compact('tb_guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_guru)
    {
        $tb_guru = tb_guru::find($id_guru);
        $tb_guru->update($request->all());
        return redirect()->route('guru')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_guru)
    {
        $tb_guru = tb_guru::find($id_guru);
        $tb_guru->delete();
        return redirect()->route('guru')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_guru = tb_guru::all();
        view()->share('dataguru', $tb_guru);
        $pdf = PDF::loadview('dataguru.printdataguru', compact('tb_guru'));
        return $pdf->stream('dataguru.pdf');
    }
}