<?php

namespace App\Http\Controllers;

use App\Imports\PerkaraImport;
use App\Models\JenisPerkara;
use App\Models\Perkara;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PerkaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // tampilkan data perkara dalam bentuk pagination
        $data = isset($request->search) ? Perkara::where('pihak1', 'LIKE', '%' . $request->search . '%')
        ->orWhere('pihak2', 'LIKE', '%' . $request->search . '%')
        ->orWhere('saksi1', 'LIKE', '%' . $request->search . '%')
        ->orWhere('saksi2', 'LIKE', '%' . $request->search . '%')
        ->orWhere('saksi3', 'LIKE', '%' . $request->search . '%')
        ->paginate(10)->withPath('/perkara?search=' . $request->search) : Perkara::paginate(10);
        return view('perkara.index', [
            'data' => $data,
            'search' => $request->search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenisPerkara = JenisPerkara::get();
        //
        return view('perkara.create', compact(['jenisPerkara']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'jenis_perkara_id' => 'required',
            'nomor_perkara' => 'required|min:19|unique:perkaras',
            'pihak1' => 'required|min:3',
            'pihak2' => 'required|min:3',
            'saksi1' => 'required|min:3',
            'saksi2' => 'required|min:3',
            'saksi3' => 'required|min:3',
            'tanggal_registrasi' => 'required|date'
        ]);

        Perkara::create($validatedData);

        return redirect('/perkara')->with(['success' => 'Perkara berhasil ditambahkan.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Perkara $perkara)
    {
        return view('perkara.show', compact(['perkara']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perkara $perkara)
    {
        //
        $jenisPerkara = JenisPerkara::get();
        //
        return view('perkara.edit', compact(['jenisPerkara', 'perkara']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perkara $perkara)
    {
        //
        $validatedData = $request->validate([
            'jenis_perkara_id' => 'required',
            'nomor_perkara' => 'required|min:19',
            'pihak1' => 'required|min:3',
            'pihak2' => 'required|min:3',
            'saksi1' => 'required|min:3',
            'saksi2' => 'required|min:3',
            'saksi3' => 'required|min:3',
            'tanggal_registrasi' => 'required|date'
        ]);

        $perkara->update($validatedData);

        return redirect('/perkara')->with(['success' => 'Perkara berhasil diperbarui.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perkara $perkara)
    {
        //
        $perkara->delete();
        return redirect('/perkara')->with(['success' => 'Perkara berhasil dihapus.']);
    }


    /**
     * Tampilkan form import data dari excel
     */
    public function form_import() {
        return view('perkara.import');
    }

    /**
     * Proses import data dari excel
     */
    public function proses_import(Request $request) {
        $request->validate([
            'file' => 'file|required'
        ]);

        // proses import data
        $file = $request->file;
        if($file) {
            Excel::import(new PerkaraImport, $file);
        }

        return redirect('/perkara')->with(['success' => 'Data perkara berhasil diimport.']);

    }
}
