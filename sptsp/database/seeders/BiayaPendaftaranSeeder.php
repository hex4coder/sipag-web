<?php

namespace Database\Seeders;

use App\Models\BiayaPendaftaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiayaPendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dataBiayaPendaftaran = [
            ['kecamatan' => 'Polewali', 'desa' => 'Polewali', 'biaya' =>      100000],
            ['kecamatan' => 'Polewali', 'desa' => 'Watang', 'biaya' =>      100000],
            ['kecamatan' => 'Polewali', 'desa' => 'Sulewatang', 'biaya' =>     100000],
            ['kecamatan' => 'Polewali', 'desa' => 'Lantora', 'biaya' =>     100000],
            ['kecamatan' => 'Polewali', 'desa' => 'Takatidung', 'biaya' =>     100000],
            ['kecamatan' => 'Polewali', 'desa' => 'Pekkabata', 'biaya' =>     100000],
            ['kecamatan' => 'Polewali', 'desa' => 'Madatte', 'biaya' =>     100000],
            ['kecamatan' => 'Polewali', 'desa' => 'Manding', 'biaya' =>     100000],
            ['kecamatan' => 'Polewali', 'desa' => 'Darma', 'biaya' =>     100000],


            ['kecamatan' => 'Anreapi', 'desa' => 'Anreapi', 'biaya' =>     180000],
            ['kecamatan' => 'Anreapi', 'desa' => 'Kelapa Dua', 'biaya' =>     200000],
            ['kecamatan' => 'Anreapi', 'desa' => 'Pappandangan', 'biaya' =>     180000],
            ['kecamatan' => 'Anreapi', 'desa' => 'Kunyi', 'biaya' =>     180000],
            ['kecamatan' => 'Anreapi', 'desa' => 'Duampanua', 'biaya' =>      180000],


            ['kecamatan' => 'Binuang', 'desa' => 'Kaleok', 'biaya' => 250000],
            ['kecamatan' => 'Binuang', 'desa' => 'Kuajang', 'biaya' => 180000],
            ['kecamatan' => 'Binuang', 'desa' => 'Amola', 'biaya' => 200000],
            ['kecamatan' => 'Binuang', 'desa' => 'Batetangnga', 'biaya' => 190000],
            ['kecamatan' => 'Binuang', 'desa' => 'Mirring', 'biaya' => 190000],
            ['kecamatan' => 'Binuang', 'desa' => 'Tonyamang', 'biaya' => 190000],
            ['kecamatan' => 'Binuang', 'desa' => 'Paku', 'biaya' => 190000],
            ['kecamatan' => 'Binuang', 'desa' => 'Mammi', 'biaya' => 180000],
            ['kecamatan' => 'Binuang', 'desa' => 'Rea Timur', 'biaya' => 190000],
            ['kecamatan' => 'Binuang', 'desa' => 'Ammasangngang', 'biaya' => 190000],
            ['kecamatan' => 'Binuang', 'desa' => 'Pulau Battoa', 'biaya' => 270000],
            ['kecamatan' => 'Binuang', 'desa' => 'Pulau Salama', 'biaya' => 270000],


            ['kecamatan' => 'Bulo', 'desa' => 'Bulo', 'biaya' => 270000],
            ['kecamatan' => 'Bulo', 'desa' => 'Karombang', 'biaya' => 270000],
            ['kecamatan' => 'Bulo', 'desa' => 'Daala Timur', 'biaya' => 280000],
            ['kecamatan' => 'Bulo', 'desa' => 'Pulliwa', 'biaya' => 280000],
            ['kecamatan' => 'Bulo', 'desa' => 'Lenggo', 'biaya' => 280000],
            ['kecamatan' => 'Bulo', 'desa' => 'Sabura', 'biaya' => 280000],
            ['kecamatan' => 'Bulo', 'desa' => 'Patambanua', 'biaya' => 280000],
            ['kecamatan' => 'Bulo', 'desa' => 'Sepporakki', 'biaya' => 280000],
            ['kecamatan' => 'Bulo', 'desa' => 'Ihing', 'biaya' => 270000],


            ['kecamatan' => 'Wonomulyo', 'desa' => 'Sidodadi', 'biaya' => 150000],
            ['kecamatan' => 'Wonomulyo', 'desa' => 'Sugiwaras', 'biaya' => 150000],
            ['kecamatan' => 'Wonomulyo', 'desa' => 'Sidorejo', 'biaya' => 150000],
            ['kecamatan' => 'Wonomulyo', 'desa' => 'Arjosari', 'biaya' => 150000],
            ['kecamatan' => 'Wonomulyo', 'desa' => 'Bumimulyo', 'biaya' => 150000],
            ['kecamatan' => 'Wonomulyo', 'desa' => 'Bumiayu', 'biaya' => 150000],
            ['kecamatan' => 'Wonomulyo', 'desa' => 'Tumpiling', 'biaya' => 150000],
            ['kecamatan' => 'Wonomulyo', 'desa' => 'Kebunsari', 'biaya' => 150000],
            ['kecamatan' => 'Wonomulyo', 'desa' => 'Banua Baru', 'biaya' => 150000],
            ['kecamatan' => 'Wonomulyo', 'desa' => 'Campurjo', 'biaya' => 150000],
            ['kecamatan' => 'Wonomulyo', 'desa' => 'Bakka-Bakka', 'biaya' => 150000],
            ['kecamatan' => 'Wonomulyo', 'desa' => 'Nepo', 'biaya' => 150000],
            ['kecamatan' => 'Wonomulyo', 'desa' => 'Galeso', 'biaya' => 150000],
            ['kecamatan' => 'Wonomulyo', 'desa' => 'Sumberjo', 'biaya' => 150000],


            ['kecamatan' => 'Mapilli', 'desa' => 'Mapilli', 'biaya' => 200000],
            ['kecamatan' => 'Mapilli', 'desa' => 'Beroangin', 'biaya' => 210000],
            ['kecamatan' => 'Mapilli', 'desa' => 'Landi Kanusuang', 'biaya' => 210000],
            ['kecamatan' => 'Mapilli', 'desa' => 'Ugu Baru', 'biaya' => 170000],
            ['kecamatan' => 'Mapilli', 'desa' => 'Segerang', 'biaya' => 200000],
            ['kecamatan' => 'Mapilli', 'desa' => 'Rappang Barat', 'biaya' => 210000],
            ['kecamatan' => 'Mapilli', 'desa' => 'Buku', 'biaya' => 210000],
            ['kecamatan' => 'Mapilli', 'desa' => 'Kurma', 'biaya' => 210000],
            ['kecamatan' => 'Mapilli', 'desa' => 'Bonra', 'biaya' => 200000],
            ['kecamatan' => 'Mapilli', 'desa' => 'Bonne-Bonne', 'biaya' => 180000],
            ['kecamatan' => 'Mapilli', 'desa' => 'Sattoko', 'biaya' => 250000],
            ['kecamatan' => 'Mapilli', 'desa' => 'Rumpa', 'biaya' => 210000],
            ['kecamatan' => 'Mapilli', 'desa' => 'Andau', 'biaya' => 210000],
            ['kecamatan' => 'Mapilli', 'desa' => 'Kanusuang', 'biaya' => 210000],



            ['kecamatan' => 'Luyo', 'desa' => 'Batupanga', 'biaya' => 200000],
            ['kecamatan' => 'Luyo', 'desa' => 'Pussui', 'biaya' => 230000],
            ['kecamatan' => 'Luyo', 'desa' => 'Tenggelang', 'biaya' => 200000],
            ['kecamatan' => 'Luyo', 'desa' => 'Sambali Wali', 'biaya' => 230000],
            ['kecamatan' => 'Luyo', 'desa' => 'Luyo', 'biaya' => 200000],
            ['kecamatan' => 'Luyo', 'desa' => 'Mapilli Barat', 'biaya' => 200000],
            ['kecamatan' => 'Luyo', 'desa' => 'Baru', 'biaya' => 200000],
            ['kecamatan' => 'Luyo', 'desa' => 'Puccadi', 'biaya' => 200000],
            ['kecamatan' => 'Luyo', 'desa' => 'Pussui Barat', 'biaya' => 230000],
            ['kecamatan' => 'Luyo', 'desa' => 'Batupanga Daala', 'biaya' => 230000],
            ['kecamatan' => 'Luyo', 'desa' => 'Mambu', 'biaya' => 200000],



            ['kecamatan' => 'Matangnga', 'desa' => 'Matangnga', 'biaya' => 330000],
            ['kecamatan' => 'Matangnga', 'desa' => 'Rangoan', 'biaya' => 300000],
            ['kecamatan' => 'Matangnga', 'desa' => 'Baba Tapua', 'biaya' => 300000],
            ['kecamatan' => 'Matangnga', 'desa' => 'Lilli', 'biaya' => 300000],
            ['kecamatan' => 'Matangnga', 'desa' => 'Katimbang', 'biaya' => 300000],
            ['kecamatan' => 'Matangnga', 'desa' => 'Tapua', 'biaya' => 300000],
            ['kecamatan' => 'Matangnga', 'desa' => 'Mambu Tapua', 'biaya' => 300000],


            ['kecamatan' => 'Balanipa', 'desa' => 'Balanipa', 'biaya' => 210000],
            ['kecamatan' => 'Balanipa', 'desa' => 'Tammejarra', 'biaya' => 210000],
            ['kecamatan' => 'Balanipa', 'desa' => 'Lego', 'biaya' => 210000],
            ['kecamatan' => 'Balanipa', 'desa' => 'Pambusuang', 'biaya' => 210000],
            ['kecamatan' => 'Balanipa', 'desa' => 'Mosso', 'biaya' => 210000],
            ['kecamatan' => 'Balanipa', 'desa' => 'Sabang Subik', 'biaya' => 210000],
            ['kecamatan' => 'Balanipa', 'desa' => 'Galung Tuluk', 'biaya' => 210000],
            ['kecamatan' => 'Balanipa', 'desa' => 'Pallis', 'biaya' => 210000],
            ['kecamatan' => 'Balanipa', 'desa' => 'Tamangalle', 'biaya' => 210000],
            ['kecamatan' => 'Balanipa', 'desa' => 'Balanipa', 'biaya' => 210000],
            ['kecamatan' => 'Balanipa', 'desa' => 'Lambanan', 'biaya' => 210000],



            ['kecamatan' => 'Campalagian', 'desa' => 'Pappang', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Ongko', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Kenje', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Sumarrang', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Botto', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Gattungan', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Padang Timur', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Lagi-Agi', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Padang', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Laliko', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Bonde', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Katumbangan Lemo', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Panyampa', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Suruang', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Lampoko', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Katumbangan', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Lapeo', 'biaya' => 200000],
            ['kecamatan' => 'Campalagian', 'desa' => 'Parappe', 'biaya' => 200000],



            ['kecamatan' => 'Tapango', 'desa' => 'Pelitakan', 'biaya' => 200000],
            ['kecamatan' => 'Tapango', 'desa' => 'Rappang', 'biaya' => 200000],
            ['kecamatan' => 'Tapango', 'desa' => 'Jambu Malea', 'biaya' => 200000],
            ['kecamatan' => 'Tapango', 'desa' => 'Kalimbua', 'biaya' => 200000],
            ['kecamatan' => 'Tapango', 'desa' => 'Batu', 'biaya' => 200000],
            ['kecamatan' => 'Tapango', 'desa' => 'Tuttula', 'biaya' => 200000],
            ['kecamatan' => 'Tapango', 'desa' => 'Tapango Barat', 'biaya' => 200000],
            ['kecamatan' => 'Tapango', 'desa' => 'Dakka', 'biaya' => 200000],
            ['kecamatan' => 'Tapango', 'desa' => 'Banato Rejo', 'biaya' => 200000],
            ['kecamatan' => 'Tapango', 'desa' => 'Palatta', 'biaya' => 200000],
            ['kecamatan' => 'Tapango', 'desa' => 'Tapango', 'biaya' => 200000],
            ['kecamatan' => 'Tapango', 'desa' => 'Riso', 'biaya' => 200000],
            ['kecamatan' => 'Tapango', 'desa' => 'Kurrak', 'biaya' => 200000],
            ['kecamatan' => 'Tapango', 'desa' => 'Bussu', 'biaya' => 200000],



            ['kecamatan' => 'Tinambung', 'desa' => 'Tinambung', 'biaya' => 220000],
            ['kecamatan' => 'Tinambung', 'desa' => 'Karama', 'biaya' => 220000],
            ['kecamatan' => 'Tinambung', 'desa' => 'Tangnga-Tangnga', 'biaya' => 220000],
            ['kecamatan' => 'Tinambung', 'desa' => 'Lekopaddis', 'biaya' => 220000],
            ['kecamatan' => 'Tinambung', 'desa' => 'Galung Lombok', 'biaya' => 220000],
            ['kecamatan' => 'Tinambung', 'desa' => 'Tandung', 'biaya' => 220000],
            ['kecamatan' => 'Tinambung', 'desa' => 'Batulaya', 'biaya' => 220000],
            ['kecamatan' => 'Tinambung', 'desa' => 'Sepabatu', 'biaya' => 220000],



            ['kecamatan' => 'Limboro', 'desa' => 'Limboro', 'biaya' => 220000],
            ['kecamatan' => 'Limboro', 'desa' => 'Lembang-Lembang', 'biaya' => 220000],
            ['kecamatan' => 'Limboro', 'desa' => 'Tandassura', 'biaya' => 220000],
            ['kecamatan' => 'Limboro', 'desa' => 'Samasundu', 'biaya' => 220000],
            ['kecamatan' => 'Limboro', 'desa' => 'Napo', 'biaya' => 220000],
            ['kecamatan' => 'Limboro', 'desa' => 'Todang-Todang', 'biaya' => 220000],
            ['kecamatan' => 'Limboro', 'desa' => 'Pendulangan', 'biaya' => 220000],
            ['kecamatan' => 'Limboro', 'desa' => 'Renggeang', 'biaya' => 220000],
            ['kecamatan' => 'Limboro', 'desa' => 'Salarri', 'biaya' => 220000],
            ['kecamatan' => 'Limboro', 'desa' => 'Tangan Baru', 'biaya' => 220000],
            ['kecamatan' => 'Limboro', 'desa' => 'Palece', 'biaya' => 220000],



            ['kecamatan' => 'Tutar', 'desa' => 'Taramanu', 'biaya' => 430000],
            ['kecamatan' => 'Tutar', 'desa' => 'Ambopadang', 'biaya' => 430000],
            ['kecamatan' => 'Tutar', 'desa' => 'Tubbi', 'biaya' => 430000],
            ['kecamatan' => 'Tutar', 'desa' => 'Ratte', 'biaya' => 430000],
            ['kecamatan' => 'Tutar', 'desa' => 'Besoangin', 'biaya' => 430000],
            ['kecamatan' => 'Tutar', 'desa' => 'Piriang Tipako', 'biaya' => 430000],
            ['kecamatan' => 'Tutar', 'desa' => 'Taloba', 'biaya' => 430000],
            ['kecamatan' => 'Tutar', 'desa' => 'Arabua', 'biaya' => 430000],
            ['kecamatan' => 'Tutar', 'desa' => 'Peburru', 'biaya' => 430000],
            ['kecamatan' => 'Tutar', 'desa' => 'Besoangin Utara', 'biaya' => 430000],
            ['kecamatan' => 'Tutar', 'desa' => 'Pelloani', 'biaya' => 430000],
            ['kecamatan' => 'Tutar', 'desa' => 'Poda-Poda', 'biaya' => 430000],
            ['kecamatan' => 'Tutar', 'desa' => 'Taramanu Tua', 'biaya' => 450000],


            ['kecamatan' => 'Alu', 'desa' => 'Mombi','biaya' => 240000 ],
            ['kecamatan' => 'Alu', 'desa' => 'Kalumammang','biaya' => 240000 ],
            ['kecamatan' => 'Alu', 'desa' => 'Pao-Pao','biaya' => 240000 ],
            ['kecamatan' => 'Alu', 'desa' => 'Puppuring','biaya' => 240000 ],
            ['kecamatan' => 'Alu', 'desa' => 'Saragiang','biaya' => 240000 ],
            ['kecamatan' => 'Alu', 'desa' => 'Sayoang','biaya' => 240000 ],
            ['kecamatan' => 'Alu', 'desa' => 'Alu','biaya' => 240000 ],
            

            ['kecamatan' => 'Sumarorong', 'desa' => 'Rante Kamase','biaya' => 400000 ],
            ['kecamatan' => 'Sumarorong', 'desa' => 'Banea','biaya' => 400000 ],
            ['kecamatan' => 'Sumarorong', 'desa' => 'Sumarorong','biaya' => 400000 ],
            ['kecamatan' => 'Sumarorong', 'desa' => 'Tabone','biaya' => 400000 ],
            ['kecamatan' => 'Sumarorong', 'desa' => 'Batang Uru','biaya' => 400000 ],
            ['kecamatan' => 'Sumarorong', 'desa' => 'Baratang Uru Timur','biaya' => 400000 ],
            ['kecamatan' => 'Sumarorong', 'desa' => 'Sibanawa','biaya' => 400000 ],
            ['kecamatan' => 'Sumarorong', 'desa' => 'Sasakan','biaya' => 400000 ],
            ['kecamatan' => 'Sumarorong', 'desa' => 'Tadasi','biaya' => 400000 ],
            ['kecamatan' => 'Sumarorong', 'desa' => 'Salu Balo','biaya' => 400000 ],
            

            ['kecamatan' => 'Mamasa', 'desa' => 'Mamsa','biaya' => 500000 ],
            ['kecamatan' => 'Mamasa', 'desa' => 'Buntu Buda','biaya' => 500000 ],
            ['kecamatan' => 'Mamasa', 'desa' => 'Mambulilling','biaya' => 500000 ],
            ['kecamatan' => 'Mamasa', 'desa' => 'Taupe','biaya' => 500000 ],
            ['kecamatan' => 'Mamasa', 'desa' => 'Osango','biaya' => 500000 ],
            ['kecamatan' => 'Mamasa', 'desa' => 'Lambana Salulo','biaya' => 500000 ],
            ['kecamatan' => 'Mamasa', 'desa' => 'Pabassiang','biaya' => 500000 ],
            ['kecamatan' => 'Mamasa', 'desa' => 'Bombong Lambe','biaya' => 500000 ],
            ['kecamatan' => 'Mamasa', 'desa' => 'Bubun Batu','biaya' => 500000 ],
            ['kecamatan' => 'Mamasa', 'desa' => 'Tunduk Bakaru','biaya' => 500000 ],
            ['kecamatan' => 'Mamasa', 'desa' => 'Rambusaratu','biaya' => 500000 ],
            ['kecamatan' => 'Mamasa', 'desa' => 'Lambanan','biaya' => 600000 ],
            



            ['kecamatan' => 'Balla', 'desa' => 'Balla','biaya' => 475000] ,
            ['kecamatan' => 'Balla', 'desa' => 'Balla Barat','biaya' => 475000] ,
            ['kecamatan' => 'Balla', 'desa' => 'Balla Tumula','biaya' => 475000] ,
            ['kecamatan' => 'Balla', 'desa' => 'Pidara','biaya' => 475000] ,
            ['kecamatan' => 'Balla', 'desa' => 'Sepakuang','biaya' => 475000] ,
            ['kecamatan' => 'Balla', 'desa' => 'Bamba Puang','biaya' => 475000] ,
            ['kecamatan' => 'Balla', 'desa' => 'Balla Satanetean','biaya' => 475000] ,
            ['kecamatan' => 'Balla', 'desa' => 'Balla Timur','biaya' => 475000] ,
            


            ['kecamatan' => 'Tawalian', 'desa' => 'Tawalian','biaya' => 520000 ],
            ['kecamatan' => 'Tawalian', 'desa' => 'Tawalian Timur','biaya' => 550000 ],
            ['kecamatan' => 'Tawalian', 'desa' => 'Kariango','biaya' => 550000 ],
            ['kecamatan' => 'Tawalian', 'desa' => 'Rante Tangnga','biaya' => 550000 ],
            


            ['kecamatan' => 'Messawa', 'desa' => 'Messawa','biaya' => 380000 ],
            ['kecamatan' => 'Messawa', 'desa' => 'Sepang','biaya' => 380000 ],
            ['kecamatan' => 'Messawa', 'desa' => 'Rippung','biaya' => 380000 ],
            ['kecamatan' => 'Messawa', 'desa' => 'Makuang','biaya' => 380000 ],
            ['kecamatan' => 'Messawa', 'desa' => 'Pasapa Mambu','biaya' => 380000 ],
            ['kecamatan' => 'Messawa', 'desa' => 'Malimbong','biaya' => 380000 ],
            ['kecamatan' => 'Messawa', 'desa' => 'Matande','biaya' => 380000 ],
            ['kecamatan' => 'Messawa', 'desa' => 'Sipai','biaya' => 380000 ],
            ['kecamatan' => 'Messawa', 'desa' => 'Tanete Batu','biaya' => 380000 ],
            


            ['kecamatan' => 'Aralle', 'desa' => 'Aralle','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Rante Berang','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Salu Tambung','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Aralle Utara','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Kalabe','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Uhailanu','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Panetean','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Kebanga','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Aralle Selatan','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Kabae','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Baruru','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Uhaidao','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Aralle Timur','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Salutambung Barat','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Salutambung Timur','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Panatangan','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Hahangan','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Buntumalangka','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Salurindu','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Ralleanak','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Pamoseang Panga','biaya' => 650000 ],
            ['kecamatan' => 'Aralle', 'desa' => 'Ralleanak Utara','biaya' => 650000 ],
            

            ['kecamatan' => 'Bambang', 'desa' => 'Bambang', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Minanga', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Rante Lemo', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Bambang Timur', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Salukadi', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Masoso', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Saludengen', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Ulumambi', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Sikamase', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Limba Debata', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Ulumambi Barat', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Lembang Mokallang', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Salukepopok', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Saluassing', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Salubulo', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Tanete Tomba', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Salururuh', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Rantetarima', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Salutabang', 'biaya' => 650000 ],
            ['kecamatan' => 'Bambang', 'desa' => 'Balatana', 'biaya' => 650000 ],
            


            ['kecamatan' => 'Sesena Padang', 'desa' => 'Orobua', 'biaya' => 550000 ],
            ['kecamatan' => 'Sesena Padang', 'desa' => 'Orobua Timur', 'biaya' => 550000 ],
            ['kecamatan' => 'Sesena Padang', 'desa' => 'Rantepuang', 'biaya' => 550000 ],
            ['kecamatan' => 'Sesena Padang', 'desa' => 'Mallakena Padang', 'biaya' => 550000 ],
            ['kecamatan' => 'Sesena Padang', 'desa' => 'Paldan', 'biaya' => 550000 ],
            ['kecamatan' => 'Sesena Padang', 'desa' => 'Orobua Selatan', 'biaya' => 550000 ],
            ['kecamatan' => 'Sesena Padang', 'desa' => 'Lisunanda', 'biaya' => 550000 ],
            ['kecamatan' => 'Sesena Padang', 'desa' => 'Satanetean', 'biaya' => 550000 ],
            ['kecamatan' => 'Sesena Padang', 'desa' => 'Marampan Orobua', 'biaya' => 550000 ],
            ['kecamatan' => 'Sesena Padang', 'desa' => 'Malimbong', 'biaya' => 550000 ],
            

            ['kecamatan' => 'Tandukkalua', 'desa' => 'Minake','biaya' => 450000 ],
            ['kecamatan' => 'Tandukkalua', 'desa' => 'Malbo','biaya' => 450000 ],
            ['kecamatan' => 'Tandukkalua', 'desa' => 'Sindang Manik','biaya' => 450000 ],
            ['kecamatan' => 'Tandukkalua', 'desa' => 'Tamalantik','biaya' => 450000 ],
            ['kecamatan' => 'Tandukkalua', 'desa' => 'Parondobulawang','biaya' => 450000 ],
            ['kecamatan' => 'Tandukkalua', 'desa' => 'Mannababa','biaya' => 450000 ],
            ['kecamatan' => 'Tandukkalua', 'desa' => 'Mesakada','biaya' => 450000 ],
            ['kecamatan' => 'Tandukkalua', 'desa' => 'Balabatu','biaya' => 450000 ],
            ['kecamatan' => 'Tandukkalua', 'desa' => 'Pambe','biaya' => 450000 ],
            ['kecamatan' => 'Tandukkalua', 'desa' => 'Salurano','biaya' => 450000 ],
            ['kecamatan' => 'Tandukkalua', 'desa' => 'Talimbung','biaya' => 450000 ],
            ['kecamatan' => 'Tandukkalua', 'desa' => 'Kanan','biaya' => 450000 ],
            


            ['kecamatan' => 'Nosu', 'desa' => 'Nosu', 'biaya' => 750000 ],
            ['kecamatan' => 'Nosu', 'desa' => 'Siwi', 'biaya' => 750000 ],
            ['kecamatan' => 'Nosu', 'desa' => 'Masewe', 'biaya' => 750000 ],
            ['kecamatan' => 'Nosu', 'desa' => 'Batupapan', 'biaya' => 750000 ],
            ['kecamatan' => 'Nosu', 'desa' => 'Minanga', 'biaya' => 750000 ],
            ['kecamatan' => 'Nosu', 'desa' => 'Minanga Timur', 'biaya' => 750000 ],
            ['kecamatan' => 'Nosu', 'desa' => 'Parinding', 'biaya' => 750000 ],
            


            ['kecamatan' => 'Mehalaan', 'desa' => 'Botteng', 'biaya' => 700000 ],
            ['kecamatan' => 'Mehalaan', 'desa' => 'Passembuk', 'biaya' => 700000 ],
            ['kecamatan' => 'Mehalaan', 'desa' => 'Salukonta', 'biaya' => 700000 ],
            ['kecamatan' => 'Mehalaan', 'desa' => 'Leko Sukamaju', 'biaya' => 700000 ],
            ['kecamatan' => 'Mehalaan', 'desa' => 'Mesakada', 'biaya' => 700000 ],
            ['kecamatan' => 'Mehalaan', 'desa' => 'Mehalaan', 'biaya' => 700000 ],
            ['kecamatan' => 'Mehalaan', 'desa' => 'Mehalaan Barat', 'biaya' => 700000 ],
            ['kecamatan' => 'Mehalaan', 'desa' => 'Saluahok', 'biaya' => 700000 ],
            


            ['kecamatan' => 'Mambi', 'desa' => 'Mambi', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Talippuki', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Mehalan', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Rantebulahan', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Sondoklayuk', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Mesakanda', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Salukonta', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Botteng', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Salubanua', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Apalinna', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Pamoseang', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Salumaka', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Sendana', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Bujung Manurung', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Salualo', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Saluahok', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Lekosumaju', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Pasembuk', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Salubanua Selatan', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Indobanua', 'biaya' => 700000 ],
            ['kecamatan' => 'Mambi', 'desa' => 'Saludurain', 'biaya' => 700000 ],
            


            ['kecamatan' => 'Rantebulahan Timur', 'desa' => 'Salumokanan', 'biaya' => 600000 ],
            ['kecamatan' => 'Rantebulahan Timur', 'desa' => 'Salumokanan Timur', 'biaya' => 600000 ],
            ['kecamatan' => 'Rantebulahan Timur', 'desa' => 'Salumokanan Barat', 'biaya' => 600000 ],
            ['kecamatan' => 'Rantebulahan Timur', 'desa' => 'Baungin', 'biaya' => 600000 ],
            ['kecamatan' => 'Rantebulahan Timur', 'desa' => 'Bambung Buda', 'biaya' => 600000 ],
            ['kecamatan' => 'Rantebulahan Timur', 'desa' => 'Leko', 'biaya' => 600000 ],
            ['kecamatan' => 'Rantebulahan Timur', 'desa' => 'Kirak', 'biaya' => 600000 ],
            ['kecamatan' => 'Rantebulahan Timur', 'desa' => 'Salubanua Selatan', 'biaya' => 600000 ],
            


            ['kecamatan' => 'Pana', 'desa' => 'Pana', 'biaya' => 850000 ],
            ['kecamatan' => 'Pana', 'desa' => 'Manipi', 'biaya' => 850000 ],
            ['kecamatan' => 'Pana', 'desa' => 'Mamullu', 'biaya' => 850000 ],
            ['kecamatan' => 'Pana', 'desa' => 'Ulu Salu', 'biaya' => 850000 ],
            ['kecamatan' => 'Pana', 'desa' => 'Sepang', 'biaya' => 850000 ],
            ['kecamatan' => 'Pana', 'desa' => 'Batubaringan', 'biaya' => 850000 ],
            ['kecamatan' => 'Pana', 'desa' => 'Panura', 'biaya' => 850000 ],
            ['kecamatan' => 'Pana', 'desa' => 'Tallang Balubawang', 'biaya' => 850000 ],
            ['kecamatan' => 'Pana', 'desa' => 'Karaka', 'biaya' => 850000 ],
            ['kecamatan' => 'Pana', 'desa' => 'Weri', 'biaya' => 850000 ],
            ['kecamatan' => 'Pana', 'desa' => 'Ulusalu Indah', 'biaya' => 850000 ],
            ['kecamatan' => 'Pana', 'desa' => 'Salutambung', 'biaya' => 850000 ],
            ['kecamatan' => 'Pana', 'desa' => 'Saloan', 'biaya' => 850000 ],
            

            ['kecamatan' => 'Tabulahan', 'desa' => 'Lahakang', 'biaya' => 650000 ],
            ['kecamatan' => 'Tabulahan', 'desa' => 'Pariangan', 'biaya' => 650000 ],
            ['kecamatan' => 'Tabulahan', 'desa' => 'Malatiro', 'biaya' => 650000 ],
            ['kecamatan' => 'Tabulahan', 'desa' => 'Tabulahan', 'biaya' => 650000 ],
            ['kecamatan' => 'Tabulahan', 'desa' => 'Saluleang', 'biaya' => 650000 ],
            ['kecamatan' => 'Tabulahan', 'desa' => 'Taora', 'biaya' => 650000 ],
            ['kecamatan' => 'Tabulahan', 'desa' => 'Tampakurra', 'biaya' => 650000 ],
            ['kecamatan' => 'Tabulahan', 'desa' => 'Salubakka', 'biaya' => 650000 ],
            ['kecamatan' => 'Tabulahan', 'desa' => 'Gandang Dewata', 'biaya' => 650000 ],
            ['kecamatan' => 'Tabulahan', 'desa' => 'Pangandaran', 'biaya' => 650000 ],
            ['kecamatan' => 'Tabulahan', 'desa' => 'Burana', 'biaya' => 650000 ],
            ['kecamatan' => 'Tabulahan', 'desa' => 'Lahakang Utama', 'biaya' => 650000 ],
            ['kecamatan' => 'Tabulahan', 'desa' => 'Timoro', 'biaya' => 650000 ],
            ['kecamatan' => 'Tabulahan', 'desa' => 'Talopak', 'biaya' => 650000 ],
            ['kecamatan' => 'Tabulahan', 'desa' => 'Peu', 'biaya' => 650000 ],
            


            ['kecamatan' => 'Buntu Malangka', 'desa' => 'Aralle Timur', 'biaya' => 900000 ],
            ['kecamatan' => 'Buntu Malangka', 'desa' => 'Salutambang Timur', 'biaya' => 900000 ],
            ['kecamatan' => 'Buntu Malangka', 'desa' => 'Salutambung', 'biaya' => 900000 ],
            ['kecamatan' => 'Buntu Malangka', 'desa' => 'Kebanga', 'biaya' => 900000 ],
            ['kecamatan' => 'Buntu Malangka', 'desa' => 'Salutambung Barat', 'biaya' => 900000 ],
            


            ['kecamatan' => 'Tabang', 'desa' => 'Tabang', 'biaya' => 800000 ],
            ['kecamatan' => 'Tabang', 'desa' => 'Tabang Barat', 'biaya' => 800000 ],
            ['kecamatan' => 'Tabang', 'desa' => 'Tondokkalua', 'biaya' => 800000 ],
            ['kecamatan' => 'Tabang', 'desa' => 'Bakadisura', 'biaya' => 800000 ],
            ['kecamatan' => 'Tabang', 'desa' => 'Mauppu', 'biaya' => 800000 ],
            ['kecamatan' => 'Tabang', 'desa' => 'Kalama', 'biaya' => 800000 ],
            



        ];


        // entri data
        foreach ($dataBiayaPendaftaran as $data) {
            BiayaPendaftaran::create($data);
        }
    }
}
