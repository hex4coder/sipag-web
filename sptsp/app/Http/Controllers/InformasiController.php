<?php

namespace App\Http\Controllers;

use App\Models\JenisPerkara;
use App\Models\Prasyarat;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    //
    public function index() {
        $dataPrasyarat = JenisPerkara::with('prasyarat')->get();
        return view('welcome', [
            'data' => $dataPrasyarat,
        ]);
    }
}
