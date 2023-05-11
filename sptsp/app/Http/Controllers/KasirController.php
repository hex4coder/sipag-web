<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Perkara;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    /**
     * Munculkan data
     */
    public function index(Request $request) { 

        $pembayarans = Pembayaran::with(['perkara', 'perkara.jenis_perkara'])->orderBy('created_at', 'DESC')->get();

        return view('kasir.index', compact('pembayarans'));
    }


    /**
     * Tambah data baru
     */
    public function tambah() {
        $perkaras = Perkara::with(['jenis_perkara'])->get();
        return view('kasir.tambah', compact('perkaras'));
    }


    /**
     * Simpan data
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'pemasukan' => 'required',
            'pengeluaran' => 'required',
            'perkara_id' => 'required',
            'jenis_pembayaran' => 'required|min:3'
        ]);

        if($validated) {

            $pengeluaran = $validated['pengeluaran'];
            $pemasukan = $validated['pemasukan'];

            if($pengeluaran == 0 && $pemasukan == 0) {
                return redirect('/kasir')->with(['error' => 'Salah satu pemasukan atau pengeluaran harus lebih dari 0']);
            }
            
            if($pengeluaran == 0 && $pemasukan > 0) {
                $sisa = $pemasukan;
            } else {
                // cari sisa sebelumnya
                $perkara_id  = $validated['perkara_id'];
                $pembayaran = Pembayaran::where('perkara_id', $perkara_id)->orderBy('created_at', 'desc')->first();
                if(!$pembayaran) {
                    $sisa  = $pemasukan - $pengeluaran;
                } else {
                    $sisa = $pembayaran->sisa + $pemasukan - $pengeluaran;
                }
            }

            $validated['sisa'] = $sisa;
            Pembayaran::create($validated);

            return redirect('/kasir')->with(['success' => 'Berhasil menginput data pembayaran']);
        } else {
            return view('kasir.index', compact('request'));
        }
    }


    /**
     * Form Edit
     */
    public function edit($id) {
        $perkaras = Perkara::with(['jenis_perkara'])->get();
        $pembayaran = Pembayaran::find($id);
        return view('kasir.edit', compact('pembayaran', 'perkaras'));
    }


    /**
     * Perbarui data
     */
    public function update(Request $request) {
        $validated = $request->validate([
            'pemasukan' => 'required',
            'pengeluaran' => 'required',
            'perkara_id' => 'required',
            'jenis_pembayaran' => 'required|min:3',
            'id' => 'required'
        ]);
        $cp = Pembayaran::find($request->id);
        if($validated) {

            $pengeluaran = $validated['pengeluaran'];
            $pemasukan = $validated['pemasukan'];

            if($pengeluaran == 0 && $pemasukan == 0) {
                return redirect('/kasir')->with(['error' => 'Salah satu pemasukan atau pengeluaran harus lebih dari 0']);
            }
            
            if($pengeluaran == 0 && $pemasukan > 0) {
                $sisa = $pemasukan;
            } else {
                // cari sisa sebelumnya
                $perkara_id  = $validated['perkara_id'];
                $pembayaran = Pembayaran::where('perkara_id', $perkara_id)->orderBy('created_at', 'desc')->first();
                if(!$pembayaran) {
                    $sisa  = $pemasukan - $pengeluaran;
                } else {
                    $sisa = $pembayaran->sisa + $pemasukan - $pengeluaran;
                }
            }

            $validated['sisa'] = $sisa;
            unset($validated['id']);
            $cp->update($validated);

            return redirect('/kasir')->with(['success' => 'Berhasil memperbarui data pembayaran']);
        } else {
            $pembayaran = $request;
            return view('kasir.index', compact('pembayaran'));
        }
    }


    /**
     * Hapus data
     */
    public function delete($id) {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();

        return redirect('/kasir')->with(['success' => 'Berhasil menghapus transaksi pembayaran']);
    }
}
