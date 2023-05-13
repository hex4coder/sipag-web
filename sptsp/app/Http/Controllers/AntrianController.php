<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Notification;
use App\Models\Perkara;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class AntrianController extends Controller
{
    /**
     * Ambil data antrian
     */
    public function index(Request $request)
    {
        $antrians = [];
        $all = 'off';
        if (isset($request->all)) {
            if ($request->all == 'on') {
                $antrians = Antrian::orderBy('created_at', 'DESC')
                    ->with(['perkara', 'perkara.jenis_perkara'])
                    ->get();
            } else {
                $antrians = Antrian::whereDate('created_at', Carbon::today())
                    ->with(['perkara'])
                    ->orderBy('created_at', 'DESC')
                    ->get();
            }
            $all = $request->all;
        } else {
            $antrians = Antrian::whereDate('created_at', Carbon::today())
                ->with(['perkara'])
                ->orderBy('created_at', 'DESC')
                ->get();
        }

        return view('antrian.index', compact('antrians', 'all'));
    }


    /**
     * Fungsi cetak data antrian
     */
    public function cetak()
    {
        $antrians = Antrian::with(['perkara', 'perkara.saksi'])->orderBy('updated_at', 'desc')->get();

        $tanggal = Carbon::today()->format('d M y');
        $pdf = PDF::loadview('antrian.cetak', [
            'antrians' => $antrians,
            'tanggal' => $tanggal
        ])->setPaper('a4', 'portrait');
        return $pdf->stream();
    }


    /**
     * Memunculkan detail data antrian
     */
    public function detail($id)
    {
        $antrian = Antrian::with(['perkara', 'perkara.saksi', 'perkara.jenis_perkara'])->find($id);
        return view('antrian.detail', compact('antrian'));
    }



    /**
     * Isi data sidang
     */
    public function isi_data_sidang($id)
    {
        $antrian = Antrian::with(['perkara', 'perkara.saksi', 'perkara.jenis_perkara'])->find($id);
        return view('antrian.isi_sidang', compact('antrian'));
    }


    /**
     * Tempat pengisian data sidang
     */
    public function post_isi_sidang(Request $request)
    {

        $validatedData = $request->validate([
            'sidang_ke' => 'required',
            'agenda' => 'required|min:5',
            'ruang_sidang' => 'required|min:5',
            'km_pp_jsp' => 'required|min:2',
        ]);

        // dd($validatedData);
        $antrian = Antrian::findOrFail($request->id);
        $antrian->sidang_ke = $validatedData['sidang_ke'];
        $antrian->km_pp_jsp = $validatedData['km_pp_jsp'];
        $antrian->agenda = $validatedData['agenda'];
        $antrian->ruang_sidang = $validatedData['ruang_sidang'];
        $antrian->save();

        return redirect("/antrian/" . $antrian->id);
    }


    /**
     * Update status antrian
     */
    public function update_status($id, $status)
    {
        $antrian = Antrian::find($id);


        $status = (int)$status;
        $cs = $antrian->status;
        $cs = (int)$cs;

        if ($status == 1) {
            // antrian baru dan diterima
            Notification::create(
                [
                    'perkara_id' => $antrian->perkara_id,
                    'notif' => 'Antrian anda diterima silahkan menunggu sampai anda dipanggil.'
                ]
            );
        }

        if ($cs == 1 && $status == 2) {
            // antrian dipanggil
            Notification::create(
                [
                    'perkara_id' => $antrian->perkara_id,
                    'notif' => 'Anda dipanggil silahkan menuju loket antrian untuk menunggu masuk ruang sidang.'
                ]
            );
        }

        if ($cs == 2 && $status == 3) {
            // antrian masuk sidang
            Notification::create(
                [
                    'perkara_id' => $antrian->perkara_id,
                    'notif' => 'Anda telah memasuki ruang sidang.'
                ]
            );
        }

        if ($cs == 3 && $status == 4) {
            // antrian selesai sidang
            Notification::create(
                [
                    'perkara_id' => $antrian->perkara_id,
                    'notif' => 'Sidang anda hari ini telah selesai dengan agenda ' . $antrian->agenda . '.'
                ]
            );

            // masukkan tahapan_terakhir ke data perkara
            $perkara = Perkara::find($antrian->perkara_id);
            $perkara->tahapan_akhir = $antrian->agenda;
            $perkara->save();
        }

        if ($status == 5) {
            // antrian lewat
            Notification::create(
                [
                    'perkara_id' => $antrian->perkara_id,
                    'notif' => 'Antrian anda terlewat, silahkan menunggu dipanggil ulang jika masih ada kuota sidang hari ini.'
                ]
            );
        }

        $antrian->status = (string)$status;
        $antrian->save();
        return redirect("/antrian");
    }
}
