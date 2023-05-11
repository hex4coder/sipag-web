<?php

namespace App\Http\Controllers;

use App\Models\JenisPerkara;
use App\Models\Prasyarat;
use Illuminate\Http\Request;

class SyaratController extends Controller
{
 
    /**
     * 
     * List data
     */
    public function index(Request $request) {
        $syarats = Prasyarat::with(['jenis_perkara'])->orderBy('jenis_perkara_id', 'ASC')->paginate(5);
        return view('prasyarat.index', compact('syarats'));
    }


    /**
     * Munculkan form tambah data baru
     */
    public function tambah() {
        $jenisPerkara = JenisPerkara::all();
        return view('prasyarat.tambah', compact('jenisPerkara'));
    }

    /**
     * Menyimpan data syarat baru
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'syarat' => 'required|min:10',
            'jenis_perkara_id' => 'required'
        ]);

        Prasyarat::create(
            $validated
        );

        return redirect('/prasyarat')->with(['success' => 'Syarat berhasil ditambahkan.']);
    }


    /**
     * Munculkan form edit data
     */
    public function edit($id) {
        $syarat = Prasyarat::find($id);
        $jenisPerkara = JenisPerkara::all();
        return view('prasyarat.edit', compact('syarat', 'jenisPerkara'));
    }


    /**
     * Update data sesuai dengan data baru
     */
    public function update(Request $request) {
        $validated = $request->validate([
            'syarat' => 'required|min:10',
            'jenis_perkara_id' => 'required',
            'id' => 'required'
        ]);

        $syarat = Prasyarat::find($validated['id']);
        $syarat->jenis_perkara_id = $validated['jenis_perkara_id'];
        $syarat->syarat = $validated['syarat'];
        $syarat->save();

        return redirect('/prasyarat')->with(['success' => 'Syarat berhasil diperbarui.']);
    }



    /**
     * Update data sesuai dengan data baru
     */
    public function delete($id) {
        $syarat = Prasyarat::find($id);
        $syarat->delete();

        return redirect('/prasyarat')->with(['success' => 'Syarat berhasil dihapus.']);
    }
}
