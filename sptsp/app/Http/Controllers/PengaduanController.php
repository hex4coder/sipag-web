<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $listaduan = [];
        return view('pengaduan.index', compact('listaduan'));
    }

    public function show_data_pegawai(Request $request)
    {
        $data = isset($request->search) ? Pegawai::where('nama', 'LIKE', '%' . $request->search . '%')
            ->paginate(10)->withPath('/pengaduan/pegawai?search=' . $request->search) : Pegawai::paginate(10);
        return view('pengaduan.data_pegawai', [
            'data' => $data,
            'search' => $request->search,
        ]);
    }
}
