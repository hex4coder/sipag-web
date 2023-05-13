<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Carbon\Carbon;
use PDF;

class SidangController extends Controller
{
    public function index()
    {
        $antrians = Antrian::with(['perkara', 'perkara.saksi'])->where('status', '4')->get();
        return view('sidang.index', compact('antrians'));
    }

    public function cetak()
    {
        $antrians = Antrian::with(['perkara', 'perkara.saksi'])->where('status', '4')->get();

        $tanggal = Carbon::today()->format('d M y');
        $pdf = PDF::loadview('sidang.cetak', [
            'antrians' => $antrians,
            'tanggal' => $tanggal
        ])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
