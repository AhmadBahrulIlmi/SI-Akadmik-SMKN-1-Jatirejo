<?php

namespace App\Http\Controllers;

use App\Models\tb_datatahun;
use Illuminate\Http\Request;

class dataTahunController extends Controller
{
    public function create()
    {
        return view('tahunajaran');
    }

    public function insert(Request $request)
    {
        tb_datatahun::create($request->all());
        return redirect()->route('tahunajaran');
    }
}