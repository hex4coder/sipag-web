<?php

namespace App\Http\Controllers;

use App\Models\Saksi;
use Carbon\Carbon;
use PDF;

class SaksiController extends Controller
{
    //
    public function index()
    {
        $listsaksi = Saksi::with(['perkara', 'perkara.jenis_perkara'])->get();
        return view('saksi.index', compact('listsaksi'));
    }


    public function detail($id)
    {
        $saksi = Saksi::with(['perkara'])->where('id', $id)->first();

        return view('saksi.detail', compact('saksi'));
    }


    public function cetak()
    {
        $listsaksi = Saksi::with(['perkara', 'perkara.jenis_perkara'])->get();
        $tanggal = Carbon::today()->format('d M y');
        $pdf = PDF::loadview('saksi.cetak', [
            'listsaksi' => $listsaksi,
            'tanggal' => $tanggal
        ])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
