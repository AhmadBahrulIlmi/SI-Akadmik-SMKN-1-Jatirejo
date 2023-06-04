<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_siswa;
use App\Models\tb_kelas;
use PDF;

class dataSiswa extends Controller
{

    public function siswa()
    {
        $tb_siswa = tb_kelas::get();
        if (request('search')) {
            $tb_siswa = tb_siswa::where('id_siswa', 'LIKE', '%' . request('search') . '%')
                ->orWhere('nama', 'LIKE', '%' . request('search') . '%')
                ->orWhere('jenis_kelamin', 'LIKE', '%' . request('search') . '%')
                ->orWhere('tgl_lahir', 'LIKE', '%' . request('search') . '%')
                ->orWhere('agama', 'LIKE', '%' . request('search') . '%')
                ->orWhere('alamat', 'LIKE', '%' . request('search') . '%')
                ->orWhere('no_tlp', 'LIKE', '%' . request('search') . '%')
                ->paginate(5);
        } else {
            $tb_siswa = tb_siswa::all();
        }
        return view('datasiswa.siswa', compact('tb_siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tb_siswa = tb_kelas::get();
        return view('datasiswa.tambahdatasiswa', compact('tb_siswa'));
    }

    public function insert(Request $request)
    {
        tb_siswa::create($request->all());
        return redirect()->route('siswa')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_siswa)
    {
        $tb_siswa = tb_siswa::find($id_siswa);
        $tb_siswaedit = tb_kelas::get();
        return view('datasiswa.editdatasiswa',  compact('tb_siswa', 'tb_siswaedit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_siswa)
    {
        $tb_siswa = tb_siswa::find($id_siswa);
        $tb_siswa->update($request->all());
        return redirect()->route('siswa')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_siswa)
    {
        $tb_siswa = tb_siswa::find($id_siswa);
        $tb_siswa->delete();
        return redirect()->route('siswa')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_siswa = tb_siswa::all();
        view()->share('datasiswa', $tb_siswa);
        $pdf = PDF::loadview('datasiswa.printpdf', compact('tb_siswa'));
        return $pdf->stream('datasiswa.pdf');
    }
}