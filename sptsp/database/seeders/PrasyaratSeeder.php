<?php

namespace Database\Seeders;

use App\Models\Prasyarat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrasyaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dataPrasyarat = [
            [
                'jenis_perkara_id' => 1,
                'syarat' => [
                    'Asli kutipan akta nikah / duplikat akta nikah ',
                    'Foto Copy akta nikah / duplikat kutipan akta nikah, 1 lembar dan dimatraikan Rp 6000,- distempel dan tanda tangan (NAZEGELEN) kantor pos Besar ',
                    'Foto Copy KTP, Pemohon 1 lembar folio (tidak boleh dipotong) dan dimatraikan Rp 6000,- distempel dan tanda tangan (NAZEGELEN) kantor pos Besar ',
                    'Surat izin Atasan (bagi PNS/TNI/POLRI/BUMN)',
                    'Untuk suami / istri yang tidak jelas alamatnya harus melampirkan surat keterangan dari kelurahan setempat yang menyatakan bahwa suami / istri telah pergi meninggalkan rumah sejak bulan... Tahun ... Sampai sekarang dan tidak diketahui alamatnya yang jelas',
                    'Membayar biaya panjar perkara sebesar Rp ...',
                    'Satu (1) lembar foto copy akta nikah / duplikat kutipan akta nikah yang dimateraikan Rp 6.000,- (NAZEGELIN) dan distempel kantor pos Besar',
                    'Foto copy KTP pemohon 1 lembar (atas bawah tidak boleh di[otong) yang dimateraikan Rp 6.000,- (NAZEGELEN) distempel kantor pos besar',
                    'Foto copy istri 1 pemohon 1 lembar (atas bawah tidak boleh dipotong) yang di materaikan Rp 6.000,- (NAZEGELEN) dan stempel pos besar',
                    'Foto Copy calon istri 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 6.000,- (NAZEGELEN) dan stempel kantor pos besar',
                    '"Foto copy akta cerai apabila calon istri berstatus janda cerai 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 6.000,- (NAZEGELEN) dan stempel kantor pos besar"',
                    'surat keterangan dari kelurahan yang menerangkan status calon istri kedua (misalkan janda mati, janda cerai atau masih perawan)',
                    'Foto copy akta kelahiran calon istri 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 6.000,- (NAZEGELEN) dan stempel kantor pos besar',
                    'Membuat data / daftar harta gono gini / harta bersama yang diperoleh dengan istri 1 (misalkan : mobil dengan STNK No : ..., Tanah beserta dengan rumah dengan sertifikat No : ..., Motor dengan STNK No : ... Dll)',
                    'Mengisi blanko - blanko yang telah disediakan oleh Pengadilan Agama (keterangan penghasilan, surat pernyataan, pernyataan berlaku dll)',
                    'Membayar biaya panjar perkara ',
                ],
            ],


            [
                'jenis_perkara_id' => 6,
                'syarat' => [
                    'Asli kutipan akta nikah / duplikat akta nikah ',
                    'Foto Copy akta nikah / duplikat kutipan akta nikah, 1 lembar dan dimatraikan Rp 6000,- distempel dan tanda tangan (NAZEGELEN) kantor pos Besar ',
                    'Foto Copy KTP, Pemohon 1 lembar folio (tidak boleh dipotong) dan dimatraikan Rp 6000,- distempel dan tanda tangan (NAZEGELEN) kantor pos Besar ',
                    'Surat izin Atasan (bagi PNS/TNI/POLRI/BUMN)',
                    'Untuk suami / istri yang tidak jelas alamatnya harus melampirkan surat keterangan dari kelurahan setempat yang menyatakan bahwa suami / istri telah pergi meninggalkan rumah sejak bulan... Tahun ... Sampai sekarang dan tidak diketahui alamatnya yang jelas',
                    'Membayar biaya panjar perkara sebesar Rp ...',
                    'Satu (1) lembar foto copy akta nikah / duplikat kutipan akta nikah yang dimateraikan Rp 6.000,- (NAZEGELIN) dan distempel kantor pos Besar',
                    'Foto copy KTP pemohon 1 lembar (atas bawah tidak boleh di[otong) yang dimateraikan Rp 6.000,- (NAZEGELEN) distempel kantor pos besar',
                    'Foto copy istri 1 pemohon 1 lembar (atas bawah tidak boleh dipotong) yang di materaikan Rp 6.000,- (NAZEGELEN) dan stempel pos besar',
                    'Foto Copy calon istri 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 6.000,- (NAZEGELEN) dan stempel kantor pos besar',
                    '"Foto copy akta cerai apabila calon istri berstatus janda cerai 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 6.000,- (NAZEGELEN) dan stempel kantor pos besar"',
                    'surat keterangan dari kelurahan yang menerangkan status calon istri kedua (misalkan janda mati, janda cerai atau masih perawan)',
                    'Foto copy akta kelahiran calon istri 1 lembar (atas bawah tidak boleh dipotong) yang dimateraikan Rp 6.000,- (NAZEGELEN) dan stempel kantor pos besar',
                    'Membuat data / daftar harta gono gini / harta bersama yang diperoleh dengan istri 1 (misalkan : mobil dengan STNK No : ..., Tanah beserta dengan rumah dengan sertifikat No : ..., Motor dengan STNK No : ... Dll)',
                    'Mengisi blanko - blanko yang telah disediakan oleh Pengadilan Agama (keterangan penghasilan, surat pernyataan, pernyataan berlaku dll)',
                    'Membayar biaya panjar perkara ',
                ],
            ],






            [
                'jenis_perkara_id' => 2,
                'syarat' => [
                    'Surat penolakan dari KUA ',
                    'Surat keterangan pemberitahuan adanya halangan / kekurangan persyaratan nikah dari KUA',
                    'satu (1) lembar foto copy KTP Pemohon (suami & istri) yang dimateraikan Rp 6.000,-',
                    'Foto copy KK (kartu keluarga) pemohon dimateraikan Rp 6.000,- (NAZEGELEN) dikantor pos besar',
                    '"satu (1) lembar foto copy akta nikah / duplikat kutipan akta nikah pemohon yang dimateraikan Rp 6.000,- (NAZEGELEN) dikantor pos besar dan ',
                    'menunjukkan yang asli"',
                    '"satu (1) lembar foto copy KTP calon suami folio 1 muka (atas bawah ) tidak boleh dipotong, yang dimateraikan Rp 6.000,- (NAZEGELEN) ',
                    'di kantor pos besar"',
                    'satu (1) lembar foto copy KTP calon istri folio 1 muka (atas bawah) tidak boleh dipotong, yang dimateraikan Rp 6.000,- (NAZEGELEN) dikantor pos besar',
                    'satu (1) lembar foto copy akta kelahiran calon suami yang dimateraikan Rp 6.000,- (NAZEGELEN) dikantor pos besar',
                    'satu (1) lembar foto copy akta kelahiran calon istri yang dimateraikan Rp 6.000,- (NAZEGELEN) dikantor pos besar',
                    'satu (1) lembar foto copy akta nikah orang tua calon dimateraikan Rp 6.000,- (NAZAGELEN) dikantor pos besar',
                    'surat keterangan kehamilan dari dokter / bidan (bagi yang hamil)',
                    'surat keterangan status dari kelurahan / Desa',
                    'membayar biaya panjar perkara',

                ],
            ],




            [
                'jenis_perkara_id' => 3,
                'syarat' => [
                    '"Foto copy KTP pemohon dan semua ahli waris 1 sebanyak 1 lembar folio (tidak boleh dipotong) yang dimateraiakn Rp 6.000,- (NAZAGELEN) dan stempel kantor pos besar"',
                    'Foto copy akta nikah pewaris sebanyak 1 lembar yang dimateraikan Rp 6.000,- (NAZEGELEN) dan stempel kantor pos besar ',
                    'Foto copy akta kelahiran semua anak dari pewaris sebanyal 1 lembar yang dimateraikan Rp 6.000,- (NAZEGELEN) dan stempel kantor pos besar',
                    'Foto copy surat kematian (suami / istri) sebanyak 1 lembar yang dimateraikan Rp 6.000,- (NAZEGELEN) dan stempel kantor pos besar',
                    'Foto copy surat kematian orang tua pewaris sebanyak 1 lembar yang dimateraikan Rp 6.000,- (NAZEGELEN) dan stempel kantor pos besar',
                    '"Surat keterangan dari kelurahan yang menyatakan dengan sebenarnya bahwa ahli waris (misal : suami, istri, anak) dari almarhum ... Guna mengurus penetapan ahli waris di Pengadilan Agama Polewali"',
                    'Foto copy surat keterangan ahli waris sebanyak 1 lembar yang dimateraikan Rp 6.000,- (NAZEGELEN) dan stempel kantor pos besar ',
                    'Foto copy kartu keluarga pewaris 1 yang dimateraikan Rp 6.000 (NAZEGELEN) dikantor pos besar',

                ],
            ],




            [
                'jenis_perkara_id' => 4,
                'syarat' => [
                    'Foto copy KTP pemohon yang dimateraikan Rp 6.000,- (NAZEGELEN) dikantor pos besar',
                    'Foto copy KTP semua anak-anak pemohon yang dimateraikan Rp 6.000,- (NAZEGELEN) dikantor pos besar',
                    'Foto copy surat keterangan dari KUA tempat menikan yang dimateraikan Rp 6.000,- (NAZEGELEN) di kantor pos besar',
                    'Foto copy KTP suami dan istri yang dimateraikan Rp 6.000,- dikantor pos besar',
                    'Foto copy KK (Kartu Keluarga) yang dimateraikan Rp 6.000,- (NAZEGELEN) dikantor pos besar',
                    'Foto copy surat kematian (jika salah satu telah meninggal) yang dimateraikan Rp 6.000 (NAZEGELEN) dikantor pos besar',
                    'Membayar sisa panjar perkara',

                ],
            ],





            [
                'jenis_perkara_id' => 5,
                'syarat' => [
                    'Foto copy KTP 1 lembar folio 1 muka (atas bawah tidak boleh dipotong) yang dimateraikan Rp 6.000,- (NAZEGELEN) dikantor pos besar ',
                    'Foto copy akta nikah / cerai apabila sudah bercerai yang dimateraikan Rp 6.000,- (NAZEGELEN) dan stempel dikantor pos besar',
                    'foto copy 1 lembar akta krlahiran anak -anak yang belum dewasa yang dimateraikan Rp 6.000,- (NAZEGELEN) dan stempel dikantor pos besar',
                    'Foto copy sertifikat tanah / surat lain yang dimateraikan Rp 6.000,- (NAZEGELEN) dan stempel di kantor pos besar (apabila untuk menjual / membeli)',
                    'Membayar sisa panjar perkara',
                ],
            ],
        ];




        foreach ($dataPrasyarat as $d) {
            foreach ($d['syarat'] as $s) {
                Prasyarat::create([
                    'jenis_perkara_id' => $d['jenis_perkara_id'],
                    'syarat' => $s,
                ]);
            }
        }
    }
}
