<?php

namespace App\Http\Controllers;

use App\Models\tb_admin;
use Illuminate\Http\Request;
use PDF;

class dataAdminController extends Controller
{
    public function admin()
    {
        if (request('search')) {
            $tb_admin = tb_admin::where('id_admin', 'LIKE', '%' . request('search') . '%')
                ->orWhere('nama', 'LIKE', '%' . request('search') . '%')
                ->orWhere('no_telp', 'LIKE', '%' . request('search') . '%')
                ->orWhere('alamat', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_admin = tb_admin::all();
        }
        return view('dataadmin.admin', compact('tb_admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dataadmin.tambahdataadmin');
    }

    public function insert(Request $request)
    {
        tb_admin::create($request->all());
        return redirect()->route('admin')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_admin)
    {
        $tb_admin = tb_admin::find($id_admin);
        return view('dataadmin.editdataadmin', compact('tb_admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_admin)
    {
        $tb_admin = tb_admin::find($id_admin);
        $tb_admin->update($request->all());
        return redirect()->route('admin')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_admin)
    {
        $tb_admin = tb_admin::find($id_admin);
        $tb_admin->delete();
        return redirect()->route('admin')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_admin = tb_admin::all();
        view()->share('dataadmin', $tb_admin);
        $pdf = PDF::loadview('dataadmin.printdataadmin', compact('tb_admin'));
        return $pdf->stream('dataadmin.pdf');
    }
}