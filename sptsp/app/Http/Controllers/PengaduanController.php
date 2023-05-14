<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pengaduan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class PengaduanController extends Controller
{

    /**
     * Tampilkan data aduan
     */
    public function index()
    {
        $listaduan = Pengaduan::with(['pegawai'])->get();
        return view('pengaduan.index', compact('listaduan'));
    }


    /**
     * Tampilkan data pegawai
     */
    public function show_data_pegawai(Request $request)
    {
        $data = isset($request->search) ? Pegawai::where('nama', 'LIKE', '%' . $request->search . '%')
            ->paginate(10)->withPath('/pengaduan/pegawai?search=' . $request->search) : Pegawai::paginate(10);
        return view('pengaduan.data_pegawai', [
            'data' => $data,
            'search' => $request->search,
        ]);
    }


    /**
     * Cetak laporan pengaduan
     */
    public function cetak()
    {
        $listaduan = Pengaduan::with(['pegawai'])->get();
        $tanggal = Carbon::today()->format('d M y');
        $pdf = PDF::loadview('pengaduan.cetak', [
            'listaduan' => $listaduan,
            'tanggal' => $tanggal
        ])->setPaper('a4', 'portrait');
        return $pdf->stream();
    }
}
