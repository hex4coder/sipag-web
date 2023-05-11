<?php

namespace Database\Seeders;

use App\Models\JenisPerkara;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisPerkaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dataJenisPerkara = [
            [
                'id' => 1,
                'jenis' => 'Cerai Talak',
            ],
            [
                'id' => 2,
                'jenis' => 'Dispensasi Kawin',
            ],
            [
                'id' => 3,
                'jenis' => 'Penetapan Ahli Waris',
            ],
            [
                'id' => 4,
                'jenis' => 'Isbat Nikah',
            ],
            [
                'id' => 5,
                'jenis' => 'Permohonan Perwalian',
            ],
            [
                'id' => 6,
                'jenis' => 'Cerai Gugat',
            ],
        ];
        foreach($dataJenisPerkara as $d) {
            JenisPerkara::create($d);
        }
    }
}
