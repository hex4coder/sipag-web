<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;

class SidangController extends Controller
{
    public function index() {
        $antrians = Antrian::with(['perkara', 'perkara.saksi'])->where('status', '4')->get();
        return view('sidang.index', compact('antrians'));
    }
}
