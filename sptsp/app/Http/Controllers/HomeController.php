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

        $jumlahData = [
            'jenis_perkara' => JenisPerkara::count(),
            'prasyarat' => Prasyarat::count(),
            'perkara' => Perkara::count(),
        ];


        return view('home', [
            'data' => $jumlahData,
        ]);
    }
}
