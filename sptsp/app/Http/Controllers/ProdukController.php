<?php

namespace App\Http\Controllers;

use App\Models\Perkara;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Melihat data
     */
    public function index() {
        $produks = Produk::with(['perkara', 'perkara.jenis_perkara'])->paginate(5);
        return view('produk.index', compact('produks'));
    }


    /**
     * Tambah data
     */
    public function tambah() {
        $perkaras = Perkara::all();
        return view('produk.tambah', compact('perkaras'));
    }


    /**
     * Simpan data / buat baru
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'perkara_id' => 'required',
            'tahapan_akhir' => 'required|min:5'
        ]);


        Produk::create($validated);
        return redirect('/produk')->with(['success' => 'Berhasil menginput data produk.']);
    }


    /**
     * Edit form
     */
    public function edit($id) {
        $perkaras = Perkara::all();
        $produk = Produk::find($id);
        return view('produk.edit', compact('produk', 'perkaras'));
    }


    /**
     * Update data
     */
    public function update(Request $request) {
        $validated = $request->validate([
            'id' => 'required',
            'perkara_id' => 'required',
            'tahapan_akhir' => 'required|min:5'
        ]);


        $p = Produk::find($validated['id']);
        unset($validated['id']);
        $p->update($validated);
        return redirect('/produk')->with(['success' => 'Berhasil memperbarui data produk.']);
    }


    /**
     * Hapus data
     */
    public function delete($id) {
        $p = Produk::find($id);
        $p->delete();

        return redirect('/produk')->with(['success' => 'Berhasil menghapus produk.']);
    }
}
