<?php

namespace App\Imports;

use App\Models\JenisPerkara;
use App\Models\Perkara;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;

class PerkaraImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        if($row[0] != null && $row[1] != null && strtolower($row[0]) != 'no') {

            $jenis = JenisPerkara::where('jenis', $row[3])->first();
            if($jenis) {
                $EXCEL_DATE  = $row[1];
                $UNIX_DATE = ($EXCEL_DATE - 25569) * 86400;
                $tanggal = gmdate("Y/m/d H:i:s", $UNIX_DATE);
                return new Perkara([
                'nomor_perkara' => $row[2],
                'jenis_perkara_id' => $jenis->id,
                'pihak1' => $row[4],
                'pihak2' => $row[5] == null ? 'KOSONG' : $row[5],
                'saksi1' => $row[6],
                'saksi2' => $row[7],
                'saksi3' => $row[8],
                'tahapan_akhir' => '',
                'tanggal_registrasi' => $tanggal,
                ]);
            } else {
                // jenis belum terentri
            }

        }

    }
}
