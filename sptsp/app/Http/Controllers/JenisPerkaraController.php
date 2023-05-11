<?php

namespace App\Http\Controllers;

use App\Models\JenisPerkara;
use Illuminate\Http\Request;

class JenisPerkaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $s = $request->search;
        $dataJenisPerkara = isset($s) ? JenisPerkara::where('jenis', 'LIKE', '%' . $s . '%')->paginate(5)->withPath('/jenis_perkara?search=' . $s) : JenisPerkara::paginate(5);
        return view('jenis_perkara.index', [
            'data' => $dataJenisPerkara,
            'search' => $s,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('jenis_perkara.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'jenis' => 'required|min:5|unique:jenis_perkaras'
        ]);

        JenisPerkara::create($validatedData);

        return redirect('/jenis_perkara')->with(['success' => 'Jenis perkara berhasil ditambahkan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisPerkara $jenisPerkara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisPerkara $jenisPerkara)
    {
        //
        return view('jenis_perkara.edit', compact(['jenisPerkara']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisPerkara $jenisPerkara)
    {
        //
        $validatedData = $request->validate([
            'jenis' => 'required|min:5|unique:jenis_perkaras'
        ]);

        $jenisPerkara->update($validatedData);

        return redirect('/jenis_perkara')->with(['success' => 'Jenis perkara berhasil diperbarui']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisPerkara $jenisPerkara)
    {
        //
        $jenisPerkara->delete();
        return redirect('jenis_perkara')->with(['success' => 'Berhasil dihapus.']);
    }
}
