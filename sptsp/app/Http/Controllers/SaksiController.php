<?php

namespace App\Http\Controllers;

use App\Models\Saksi;
use Illuminate\Http\Request;

class SaksiController extends Controller
{
    //
    public function index() {
        $listsaksi = Saksi::with(['perkara', 'perkara.jenis'])->get();
        return view('saksi.index', compact('listsaksi'));
    }
}
