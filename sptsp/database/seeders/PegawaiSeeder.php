<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dataPegawai = [
            ['H. Abdul Muhadi, S.Ag., M.H.','197403212003121000','Ketua Pengadilan Agama Polewali '],
            ['Achmad Ubaidillah, S.H.I.','197409152006041000','Wakil Ketua Pengadilan Agama Polewali'],
            ['Dr. Alyah Salam, M.H.','195812311986122000','Hakim Perbantuan PA Makassar'],
            ['Drs. Rahmat, M.H.','195912311992031000','Hakim Perbantuan PA Makassar'],
            ['Drs. H. M. Natsir.','195912311991031000','Hakim Perbantuan PA Makassar'],
            ['Dra. Hj. Nailah B., M.H.','196501091991032000','Hakim Perbantuan PA Makassar'],
            ['Drs. H. Abd. Jabbar, M.H.','196408201991031000','Hakim Perbantuan PA Makassar'],
            ['Ahmad Zubair Hasyim, S.H.I.','198809062017121000','Hakim Pengadilan Agama Polewali'],
            ['Mulhaeri, S.E., S.Sy.','199101082017122000','Hakim Pengadilan Agama Polewali'],
            ['HJ. Farida, S.H.','197112312002122000','Sekretaris Pengadilan Agama Polewali '],
            ['Dra. Saripa Jama.','196707271994032000','Panitera Pengadilan Agama Polewali '],
            ['Moh. Anshari, S.Kom.','1984090200909120000','Kepala Sub Perencanaan Teknologi Informasi dan Pelaporan '],
            ['Siti Jamilah, S.Ag.','19770220200852000','Kepala Sub Bagian Umum dan Keuangan '],
            ['Misna Surya AS, S.H.','198105172010012000','Kepala Sub Bagian Kepegawaian Organisasi & Tata Laksana '],
            ['Dicky Hageng Al Barqy, S.T.','199112102020121000','Staff CPNS Pranata Komputer '],
            ['Rizka Dwi Puspita Sari, A.md.A.B.','199612032020122000','Staff CPNS Arsiparis'],
            ['Andita Kirana Dewi, A.Md.','199409172022032000','Staff CPNS Pengelola Barang Milik Negara'],
            ['Dra. Hj. Hasnawiyah.','196312311992032000','Panitera Muda Permohonan PA. Polewali '],
            ['Sarinah S., S.H.','19850605200642000','Panitera Muda Hukum PA. Polewali'],
            ['Herawati, S.E.I.','198307102009122000','Panitera Muda Gugatan PA Polewali'],
            ['Abd. Azis, S.H.','197012312006041000','Panitera Pengganti PA Polewali'],
            ['Juarsih, S.Sy.','199101112014032000','Panitera Pengganti PA Polewali'],
            ['Muallim M, S.HI.','197105311994021000','Jurusita '],
            ['Abdul Samad, S.H.','196812311999031000','Jurusita '],
            ['Muliadi R.','198105192006041000','Jurusita '],
            ['Rahmawati, S.HI.','197601012014082000','Jurusita Pengganti PA Polewali'],
            ['Mohammad Khairul Muqorobin, S.H.','199505212022031000','Staff CPNS Analis Perkara Peradilan'],
            ['Oka Pranama Putra, S.H.','199810182022031000','Staff CPNS Analis Perkara Peradilan'],
            ['Garin Purna Sanjaya, S.H.','1998060092022030000','Staff CPNS Analis Perkara Peradilan'],
            ['Siti Mabruroh, A.Md.','199108302022032000','Staff CPNS Pengelola Perkara '],
            ['Widya Sukmawani, A.Md.','19921102202203000','Staff CPNS Pengelola Perkara '],
            ['Abdul Rahim, S.Ag.','-','Pramubakti (Honorer DIPA) PA. Polewali'],
            ['Ferawati Waris, S.H.','-','Pramubakti (Honorer DIPA) PA. Polewali'],
            ['Nurnajmiah Najib, S.Kom.','-','Pramubakti (Honorer Non- DIPA) PA. Polewali '],
            ['Nurhikma, S.E.','-','Pramubakti (Honorer Non- DIPA) PA. Polewali '],
            ['Nurhidayah, S.H., M.H.','-','Pramubakti (Honorer Non- DIPA) PA. Polewali '],
            ['Nasriana, S.H.','-','Pramubakti (Honorer DIPA) PA. Polewali'],
            ['Muslim.','-','Pramubakti (Honorer DIPA) PA. Polewali'],
            ['Sulfadli, S.IP.','-','Pramubakti (Honorer Non- DIPA) PA. Polewali '],
            ['Muhammad Kafrawi, S.H.','-','Security (Honorer DIPA) PA. Polewali'],
            ['Ricki, S.H.','-','Security (Honorer DIPA) PA. Polewali'],
        ];


        foreach($dataPegawai as $data) {
            $input = [
                'nama' => $data[0],
                'nip' => $data[1],
                'jabatan' => $data[2]
            ];

            Pegawai::create($input);
        }
    }
}
