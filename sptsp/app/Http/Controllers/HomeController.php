<?php

namespace App\Http\Controllers;

use App\Models\JenisPerkara;
use App\Models\Perkara;
use App\Models\Prasyarat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $dataGrafik = [];
        $totalDataPerkara  = 0;
        $jenisPerkaras = JenisPerkara::all();
        $listJenis = [];

        foreach ($jenisPerkaras as $jp) {
            array_push($listJenis, $jp->jenis);
            $jenis_perkara_id = $jp->id;
            $perkaras = Perkara::where('jenis_perkara_id', $jenis_perkara_id)->get();
            array_push($dataGrafik, [
                'jenis' => $jp,
                'perkara' => count($perkaras),
        
            ]);
            $totalDataPerkara += count($perkaras);
        }


        $jumlahData = [
            'jenis_perkara' => JenisPerkara::count(),
            'prasyarat' => Prasyarat::count(),
            'perkara' => Perkara::count(),
            'grafik' => [
                'total' => $totalDataPerkara,
                'data' => $dataGrafik,
                'list_jenis' => $listJenis,
            ],
        ];



        return view('home', [
            'data' => $jumlahData,
        ]);
    }
}
