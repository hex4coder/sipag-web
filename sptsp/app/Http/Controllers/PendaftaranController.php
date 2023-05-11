<?php

namespace App\Http\Controllers;

use App\Models\BiayaPendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    //
    public function index() {
        $kecamatan = BiayaPendaftaran::select('kecamatan')->distinct()->get();
        
        $data = [];
        foreach($kecamatan as $k) {
            array_push($data, [
                'kecamatan' => $k->kecamatan,
                'dataBiaya' => BiayaPendaftaran::where('kecamatan', $k->kecamatan)->get(),
            ]);
        }
        


        return view('pendaftaran', [
            'data' => $data
        ]);
    }
}
