<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\BiayaPendaftaran;
use App\Models\Notification;
use App\Models\Perkara;
use App\Models\Prasyarat;
use App\Models\Saksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MobileController extends Controller
{

    /**
     * Fungsi untuk cek koneksi pada mobile
     */
    public function cek_connection()
    {
        return 'OK';
    }


    /**
     * Pengguna android akan login dengan nomor perkara
     * 
     * parameter login:
     * no_perkara
     */
    public function login(Request $request)
    {
        $no_perkara = $request->no_perkara;
        $perkara = Perkara::where('nomor_perkara', $no_perkara)->with(['jenis_perkara'])->first();
        if (!$perkara) {
            return [
                'status' => 'error',
                'message' => 'Tidak ada data yang kami temukan',
            ];
        } else {
            return [
                'status' => 'success',
                'message' => $perkara,
            ];
        }
    }


    /**
     * Mengambil semua data saksi berdasarkan nomor perkara
     * 
     * parameter login:
     * no_perkara
     */
    public function get_saksi(Request $request)
    {
        $no_perkara = $request->no_perkara;
        $perkara = Perkara::where('nomor_perkara', $no_perkara)->with(['jenis_perkara', 'saksi'])->first();

        if (!$perkara) {
            return [
                'status' => 'error',
                'message' => 'Tidak ada data yang kami temukan',
            ];
        } else {
            return [
                'status' => 'success',
                'message' => $perkara,
            ];
        }
    }




    /**
     * Masukkan saksi ke dalam database berdasarkan nomor perkara
     * 
     * parameter:
     * 
     * no_perkara
     * 'saksi_ke',
     * 'nama', 
     * 'bin',
     * 'tempat_lahir',
     * 'tanggal_lahir',
     * 'jln',
     * 'dusun',
     * 'desa',
     * 'kec',
     * 'kab',
     * 'jk',
     * 'pekerjaan',
     * 'status_kawin',
     * 'berkebutuhan_khusus',
     * 'hubungan',
     */
    public function post_saksi(Request $request)
    {
        $saksi_ke = $request->saksi_ke;
        $nama = $request->nama;
        $bin = $request->bin;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $jln = $request->jln;
        $dusun = $request->dusun;
        $desa = $request->desa;
        $kec = $request->kec;
        $kab = $request->kab;
        $jk = $request->jk;
        $pekerjaan = $request->pekerjaan;
        $status_kawin = $request->status_kawin;
        $berkebutuhan_khusus = $request->berkebutuhan_khusus;
        $hubungan = $request->hubungan;
        $no_perkara = $request->no_perkara;
        $perkara = Perkara::where('nomor_perkara', $no_perkara)->first();
        if ($perkara) {
            $saksi = Saksi::where('perkara_id', $perkara->id)->where('saksi_ke', $saksi_ke)->first();
            if ($saksi) {
                // data sudah ada
                return [
                    'status' => 'error',
                    'message' => 'Data sudah ada',
                ];
            } else {
                // data belum ada, lakukan penginputan
                Saksi::create([
                    'perkara_id' => $perkara->id, // id dari perkara
                    'saksi_ke' => $saksi_ke,
                    'nama' => $nama,
                    'bin' => $bin,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'jln' => $jln,
                    'dusun' => $dusun,
                    'desa' => $desa,
                    'kec' => $kec,
                    'kab' => $kab,
                    'jk' => $jk,
                    'pekerjaan' => $pekerjaan,
                    'status_kawin' => $status_kawin,
                    'berkebutuhan_khusus' => $berkebutuhan_khusus,
                    'hubungan' => $hubungan,
                ]);


                return [
                    'status' => 'success',
                    'message' => 'Saksi ke ' . $saksi_ke . ' telah diinput.',
                ];
            }
        } else {
            return [
                'status' => 'error',
                'message' => 'Data perkara tidak ditemukan, silahkan login ulang.',
            ];
        }
    }


    /**
     * Hapus saksi berdasarkan id
     */
    public function delete_saksi(Request $request)
    {
        $id = $request->id;
        $saksi = Saksi::find($id);
        if ($saksi) {
            $saksi->delete();
            return [
                'status' => 'success',
                'message' => 'Saksi berhasil dihapus',
            ];
        } else {
            return [
                'status' => 'error',
                'message' => 'Data saksi tidak kami temukan',
            ];
        }
    }


    /**
     * Ambil notifikasi
     */
    public function get_notif(Request $request) {
        $no_perkara = $request->no_perkara;
        $perkara  =Perkara::where('nomor_perkara', $no_perkara)->first();
        if($perkara) {
            $perkaraId = $perkara->id;
            $dataNotif = Notification::whereDate('created_at', Carbon::today())
            ->where('perkara_id', $perkaraId)->orderBy('created_at', 'DESC')
            ->get();

            if(count($dataNotif) > 0) {
                return [
                    'status'=>'success',
                    'message'=>$dataNotif,
                ];
            } else {
                return [
                    'status' => 'error',
                    'message' => 'Belum ada data',
                    'code'  => 'no-data',
                ];    
            }

        } else {
            return [
                'status' => 'error',
                'message' => 'Tidak ada data perkara yang ditemukan',
                'code'  => 'no-perkara',
            ];
        }
    }


    /**
     * Ambil nomor antrian hari ini
     */
    public function cekNomorAntrian() {
        $dataAntrian = Antrian::whereDate('created_at', Carbon::today())->orderBy('nomor_antrian', 'DESC')->get();
        $jumlahData = count($dataAntrian);
        if($jumlahData < 1) {
            return '001';
        } else {
            $antrianTerakhir = $dataAntrian[0];
            $nomor = (int)$antrianTerakhir->nomor_antrian;
            $nomorBaru = $nomor + 1;
            $strNumber = str_pad($nomorBaru, 3, "0", STR_PAD_LEFT);
            return $strNumber;
        }
    }


    /**
     * Request nomor antrian
     * parameter no_perkara
     */
    public function request_antrian(Request $request)
    {
        $no_perkara = $request->no_perkara;
        $sidang_ke = $request->sidang_ke;
        $agenda = $request->agenda;
        $ruang_sidang = $request->ruang_sidang;
        $km_pp_jsp = $request->km_pp_jsp;

        $perkara = Perkara::where('nomor_perkara', $no_perkara)->first();
        if ($perkara) {
            $cekStatus = $this->cek_status($request);
            if($cekStatus == -1) {
                // jika belum ada  baru buat
                $nomorAntrian =  $this->cekNomorAntrian();
                $antrianBaru = Antrian::create([
                    'nomor_antrian' => $nomorAntrian,
                    'perkara_id' => $perkara->id,
                    'sidang_ke' => $sidang_ke,
                    'agenda' => $agenda,
                    'ruang_sidang' => $ruang_sidang,
                    'km_pp_jsp' => $km_pp_jsp,
                ]);
                Notification::create([
                    'perkara_id' => $perkara->id,
                    'notif' => 'Antrian terbuat dengan nomor ' . $antrianBaru->nomor_antrian,
                ]);
                return [
                    'status' => 'success',
                    'message' => 'Antrian berhasil dibuat',
                    'data' => $antrianBaru,
                ];
            } else {
                $antrians = Antrian::whereDate('created_at', Carbon::today())->where('perkara_id', $perkara->id)->get();
                if(count($antrians) > 0) {
                    $antrian = $antrians[0];
                    return [
                        'status' => 'warning',
                        'message' => 'Antrian sudah ada dengan status ' . $cekStatus,
                        'code' => 'exists',
                        'data' => $antrian,
                    ];
                }
            }

        } else {
            return [
                'status' => 'error',
                'message' => 'Tidak ada data yang ditemukan',
            ];
        }
    }


    /**
     * Cek status antrian
     * paramater no_perkara
     */
    public function cek_status(Request $request)
    {
        $no_perkara = $request->no_perkara;
        $perkara = Perkara::where('nomor_perkara', $no_perkara)->first();
        if ($perkara) {
            $listAntrian = Antrian::where('perkara_id', $perkara->id)->orderBy('updated_at', 'DESC')->get();
            $jumlahData = count($listAntrian);
            if ($jumlahData < 1) {
                return -1;
            }

            // check antrian
            $ada_hari_ini = false;
            $selesai = false;
            $antrian_hari_ini = null;
            foreach ($listAntrian as $antrian) {
                $tanggal_update = $antrian->updated_at;
                $hari_ini = Carbon::parse($tanggal_update)->isToday();
                if ($hari_ini) {
                    $ada_hari_ini = true;
                    $antrian_hari_ini = $antrian;
                }

                if ($antrian->status == 4) {
                    $selesai = true;
                }
            }


            if ($selesai) {
                return 4;
            } else {
                if ($ada_hari_ini) {
                    return $antrian_hari_ini->status;
                } else {
                    return -1;
                }
            }
        } else {
            return -2; // tidak ada data perkara
        }
    }



    /**
     * Mengambil daftar prasyarat berdasarkan id perkara
     */
    public function get_prasyarat($perkaraid) {
        $p  =Perkara::find($perkaraid);
        if(!$p) {
            return [
                'status' => 'error',
                'message' => 'Data perkara tidak ditemukan!',
            ];
        } else {
            $jenis_id = $p->jenis_perkara_id;
            $syarats = Prasyarat::where('jenis_perkara_id', $jenis_id)->get();
            return [
                'status' => 'success',
                'message' => 'Sukses mencari data syarat dengan id perkara '. $perkaraid,
                'data' => $syarats,
            ];
        }
    }


    /**
     * Mendapatkan daftar biaya pendaftaran
     */
    public function get_biaya() {
        $data = BiayaPendaftaran::orderBy('id')->get(['kecamatan', 'desa', 'biaya', 'id']);
        return [
            'status' => 'success',
            'message' => 'Data biaya berhasil diload',
            'data' => $data,
        ];
    }
}
