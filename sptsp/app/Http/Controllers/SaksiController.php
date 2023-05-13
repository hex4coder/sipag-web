<?php

namespace App\Http\Controllers;

use App\Models\Saksi;
use Illuminate\Http\Request;

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
}
