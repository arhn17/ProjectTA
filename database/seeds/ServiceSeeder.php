<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            array (
            	'nama_services' => 'Facial Product - Wardah',
            	'tarif_member' => 40000,
            	'tarif_normal' => 45000,
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Facial Product - Biokos',
            	'tarif_member' => 53000,
            	'tarif_normal' => 58000,
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Facial Dokter - Facial Lightening 1',
            	'tarif_member' => 75000 / 95000, 
            	'tarif_normal' => 80000 / 97000, 
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
                  'nama_services' => 'Facial Dokter - Facial Lightening 2',
                  'tarif_member' => 75000 / 95000, 
                  'tarif_normal' => 80000 / 97000, 
                  'tipe' => 1,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
            	'nama_services' => 'Facial Dokter - Facial Acne 1',
            	'tarif_member' => 75000 / 95000,
            	'tarif_normal' => 80000 / 97000, 
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
                  'nama_services' => 'Facial Dokter - Facial Acne 2',
                  'tarif_member' => 75000 / 95000,
                  'tarif_normal' => 80000 / 97000, 
                  'tipe' => 1,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
            	'nama_services' => 'Facial Dokter - Facial Acne 3',
            	'tarif_member' => 103000, 
            	'tarif_normal' => 113000, 
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Facial Dokter - Facial Collagen',
            	'tarif_member' => 138000,
            	'tarif_normal' => 143000,
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Facial Dokter - Facial Gold',
            	'tarif_member' => 158000,
            	'tarif_normal' => 168000,
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Facial Dokter - Mikro',
            	'tarif_member' => 150000,
            	'tarif_normal' => 160000,
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Facial KK Indonesia - Facial LYC',
            	'tarif_member' => 98000,
            	'tarif_normal' => 103000,
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Facial KK Indonesia - Facial LYC + senam wajah',
            	'tarif_member' => 133000,
            	'tarif_normal' => 138000,
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Facial Herbal - Ozon + Totok',
            	'tarif_member' => 25000,
            	'tarif_normal' => 28000,
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 15
            ),
            array (
            	'nama_services' => 'Facial Herbal - Totok Aura',
            	'tarif_member' => 65000,
            	'tarif_normal' => 70000,
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 45 
            ),
            array (
            	'nama_services' => 'Facial Herbal - Buka Aura 1',
            	'tarif_member' => 90000,
            	'tarif_normal' => 95000,
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 0
            ),
            array (
            	'nama_services' => 'Facial Herbal - Buka Aura 2',
            	'tarif_member' => 110000,
            	'tarif_normal' => 120000,
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 0
            ),
            array (
            	'nama_services' => 'Facial Herbal - Nu Skin',
            	'tarif_member' => 150000,
            	'tarif_normal' => 160000,
            	'tipe' => 1,
            	'level' => 0,
            	'durasi' => 0
            ),
            array (
            	'nama_services' => 'Creambath Tradisional (Pendek)',
            	'tarif_member' => 30000,
            	'tarif_normal' => 32000,
            	'tipe' => 2,
            	'level' => 1,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Creambath Tradisional (Sedang)',
            	'tarif_member' => 35000,
            	'tarif_normal' => 36000,
            	'tipe' => 2,
            	'level' => 2,
            	'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath Tradisional (Panjang)',
                  'tarif_member' => 37000,
                  'tarif_normal' => 39000,
                  'tipe' => 2,
                  'level' => 3,
                  'durasi' => 60
            ),
            array (
            	'nama_services' => 'Creambath Susu (Pendek)',
            	'tarif_member' => 35000,
            	'tarif_normal' => 39000,
            	'tipe' => 2,
            	'level' => 1,
            	'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath Susu (Sedang)',
                  'tarif_member' => 41000,
                  'tarif_normal' => 42000,
                  'tipe' => 2,
                  'level' => 2,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath Susu (Panjang)',
                  'tarif_member' => 43000,
                  'tarif_normal' => 46000,
                  'tipe' => 2,
                  'level' => 3,
                  'durasi' => 60
            ),
            array (
            	'nama_services' => 'Creambath SPA - Herbal Aromatic (Pendek)',
            	'tarif_member' => 48000,
            	'tarif_normal' => 53000,
            	'tipe' => 2,
            	'level' => 1,
            	'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath SPA - Herbal Aromatic (Sedang)',
                  'tarif_member' => 58000,
                  'tarif_normal' => 63000,
                  'tipe' => 2,
                  'level' => 2,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath SPA - Herbal Aromatic (Panjang)',
                  'tarif_member' => 68000,
                  'tarif_normal' => 73000,
                  'tipe' => 2,
                  'level' => 3,
                  'durasi' => 60
            ),
            array (
            	'nama_services' => 'Creambath SPA - Le Bali (Pendek)',
            	'tarif_member' => 53000,
            	'tarif_normal' => 55000,
            	'tipe' => 2,
            	'level' => 1,
            	'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath SPA - Le Bali (Sedang)',
                  'tarif_member' => 63000,
                  'tarif_normal' => 65000,
                  'tipe' => 2,
                  'level' => 2,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath SPA - Le Bali (Panjang)',
                  'tarif_member' => 73000,
                  'tarif_normal' => 75000,
                  'tipe' => 2,
                  'level' => 3,
                  'durasi' => 60
            ),
            array (
            	'nama_services' => 'Creambath SPA - Hair Energy / Makarizo (Pendek)',
            	'tarif_member' => 63000,
            	'tarif_normal' => 68000,
            	'tipe' => 2,
            	'level' => 1,
            	'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath SPA - Hair Energy / Makarizo (Sedang)',
                  'tarif_member' => 73000,
                  'tarif_normal' => 78000,
                  'tipe' => 2,
                  'level' => 2,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath SPA - Hair Energy / Makarizo (Panjang)',
                  'tarif_member' => 83000,
                  'tarif_normal' => 88000,
                  'tipe' => 2,
                  'level' => 3,
                  'durasi' => 60
            ),
            array (
            	'nama_services' => 'Creambath SPA - Kiwimango (Pendek)',
            	'tarif_member' => 63000,
            	'tarif_normal' => 68000,
            	'tipe' => 2,
            	'level' => 1,
            	'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath SPA - Kiwimango (Sedang)',
                  'tarif_member' => 73000,
                  'tarif_normal' => 78000,
                  'tipe' => 2,
                  'level' => 2,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath SPA - Kiwimango (Panjang)',
                  'tarif_member' => 83000,
                  'tarif_normal' => 88000,
                  'tipe' => 2,
                  'level' => 3,
                  'durasi' => 60
            ),
            array (
            	'nama_services' => 'Creambath SPA - NR (Pendek)',
            	'tarif_member' => 67000,
            	'tarif_normal' => 71000,
            	'tipe' => 2,
            	'level' => 1,
            	'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath SPA - NR (Sedang)',
                  'tarif_member' => 77000,
                  'tarif_normal' => 81000,
                  'tipe' => 2,
                  'level' => 2,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath SPA - NR (Panjang)',
                  'tarif_member' => 87000,
                  'tarif_normal' => 91000,
                  'tipe' => 2,
                  'level' => 3,
                  'durasi' => 60
            ),
            array (
            	'nama_services' => 'Creambath SPA - Texture/Matrix (Pendek)',
            	'tarif_member' => 89000,
            	'tarif_normal' => 93000,
            	'tipe' => 2,
            	'level' => 1,
            	'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath SPA - Texture/Matrix (Sedang)',
                  'tarif_member' => 98000 ,
                  'tarif_normal' => 103000,
                  'tipe' => 2,
                  'level' => 2,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Creambath SPA - Texture/Matrix (Panjang)',
                  'tarif_member' => 108000,
                  'tarif_normal' => 113000,
                  'tipe' => 2,
                  'level' => 3,
                  'durasi' => 60
            ),
            array (
            	'nama_services' => 'Hair Mask - Makarizo (Pendek)',
            	'tarif_member' => 58000,
            	'tarif_normal' => 63000,
            	'tipe' => 2,
            	'level' => 1,
            	'durasi' => 60
            ),
               array (
                  'nama_services' => 'Hair Mask - Makarizo(Sedang)' ,
                  'tarif_member' => 68000,
                  'tarif_normal' => 73000,
                  'tipe' => 2,
                  'level' => 2,
                  'durasi' => 60
            ),
                  array (
                  'nama_services' => 'Hair Mask - Makarizo(Panjang)',
                  'tarif_member' => 58000,
                  'tarif_normal' =>83000,
                  'tipe' => 2,
                  'level' => 3,
                  'durasi' => 60
            ),
            array (
            	'nama_services' => 'Hair Mask - Matrix(Pendek)',
            	'tarif_member' => 83000,
            	'tarif_normal' => 88000,
            	'tipe' => 2,
            	'level' => 1,
            	'durasi' => 60
            ),
               array (
                  'nama_services' => 'Hair Mask - Matrix (Sedang)',
                  'tarif_member' => 93000,
                  'tarif_normal' => 98000,
                  'tipe' => 2,
                  'level' => 2,
                  'durasi' => 60
            ),
                  array (
                  'nama_services' => 'Hair Mask - Matrix(Panjang)',
                  'tarif_member' => 98000,
                  'tarif_normal' => 103000,
                  'tipe' => 2,
                  'level' => 3,
                  'durasi' => 60
            ),
            array (
            	'nama_services' => 'Hair Mask - Treatment Kutu',
            	'tarif_member' => 70000,
            	'tarif_normal' => 75000,
            	'tipe' => 2,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Potong Rambut - Potong Rambut',
            	'tarif_member' => 25000,
            	'tarif_normal' => 30000,
            	'tipe' => 2,
            	'level' => 0,
            	'durasi' => 0
            ),
            array (
            	'nama_services' => 'Potong Rambut - Potong, Cuci & Blow Rambut',
            	'tarif_member' => 40000,
            	'tarif_normal' => 44000,
            	'tipe' => 2,
            	'level' => 0,
            	'durasi' => 0
            ),
            array (
            	'nama_services' => 'Potong Rambut - Potong & Blow',
            	'tarif_member' => 35000,
            	'tarif_normal' => 37000,
            	'tipe' => 2,
            	'level' => 0,
            	'durasi' => 0
            ),
            array (
            	'nama_services' => 'Potong Rambut - Cuci & Blow Rambut',
            	'tarif_member' => 28000,
            	'tarif_normal' => 3000,
            	'tipe' => 2,
            	'level' => 0,
            	'durasi' => 0
            ),
            array (
            	'nama_services' => 'Potong Rambut - Cuci Rambut',
            	'tarif_member' => 12000,
            	'tarif_normal' => 13000,
            	'tipe' => 2,
            	'level' => 0,
            	'durasi' => 0
            ),
            array (
            	'nama_services' => 'Potong Rambut - Blow Rambut',
            	'tarif_member' => 20000,
            	'tarif_normal' => 25000,
            	'tipe' => 2,
            	'level' => 0,
            	'durasi' => 0
            ),
            array (
            	'nama_services' => 'Potong Rambut - Menegeringkan Rambut',
            	'tarif_member' => 13000,
            	'tarif_normal' => 15000,
            	'tipe' => 2,
            	'level' => 0,
            	'durasi' => 0
            ),
            array (
            	'nama_services' => 'Potong Rambut - Tonik Vitamin Rambut',
            	'tarif_member' => 4000,
            	'tarif_normal' => 4000,
            	'tipe' => 2,
            	'level' => 0,
            	'durasi' => 0
            ),
            array (
            	'nama_services' => 'Potong Rambut - Potong Rambut Anak',
            	'tarif_member' => 20000,
            	'tarif_normal' => 25000,
            	'tipe' => 2,
            	'level' => 0,
            	'durasi' => 0
            ),
            array (
            	'nama_services' => 'Lulur Mangir Tradisional',
            	'tarif_member' => 49000,
            	'tarif_normal' => 45000,
            	'tipe' => 3,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Lulur Mangir Tradisional + Susu',
            	'tarif_member' => 50000,
            	'tarif_normal' => 55000,
            	'tipe' => 3,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Lulur Coklat',
            	'tarif_member' => 50000,
            	'tarif_normal' => 55000,
            	'tipe' => 3,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Lulur Le Bali Spesial',
            	'tarif_member' => 53000,
            	'tarif_normal' => 58000,
            	'tipe' => 3,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Lulur Susu',
            	'tarif_member' => 58000,
            	'tarif_normal' => 63000,
            	'tipe' => 3,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Lulur Whitening Avocado & Susu ',
            	'tarif_member' => 67000,
            	'tarif_normal' => 72000,
            	'tipe' => 3,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Lulur Royal Body Scrub',
            	'tarif_member' => 78000,
            	'tarif_normal' => 81000,
            	'tipe' => 3,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Lulur Madu ',
            	'tarif_member' => 91000,
            	'tarif_normal' => 99000,
            	'tipe' => 3,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Lulur Kiwimango',
            	'tarif_member' => 91000,
            	'tarif_normal' => 99000,
            	'tipe' => 3,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Lulur Wahh',
            	'tarif_member' => 93000,
            	'tarif_normal' => 99000,
            	'tipe' => 3,
            	'level' => 0,
            	'durasi' => 60
            ),
            array (
            	'nama_services' => 'Lulur Aromatheraphy ',
            	'tarif_member' => 95000,
            	'tarif_normal' => 99000,
            	'tipe' => 3,
            	'level' => 0,
            	'durasi' => 60
            ),
            
            array (
            	'nama_services' => 'Body Mask',
            	'tarif_member' => 23000,
            	'tarif_normal' => 25000,
            	'tipe' => 3,
            	'level' => 0,
            	'durasi' => 30
            ),
            array (
                  'nama_services' => ' Bengkoang Body Mask',
                  'tarif_member' => 32000,
                  'tarif_normal' => 35000,
                  'tipe' => 3,
                  'level' => 0,
                  'durasi' => 30
            ),
            array (
                  'nama_services' => 'Madu + Susu Body Mask',
                  'tarif_member' => 32000,
                  'tarif_normal' => 35000,
                  'tipe' => 3,
                  'level' => 0,
                  'durasi' => 30
            ),array (
                  'nama_services' => 'Kiwimango Body Mask',
                  'tarif_member' => 48000,
                  'tarif_normal' => 63000,
                  'tipe' => 3,
                  'level' => 0,
                  'durasi' => 30
            ),array (
                  'nama_services' => 'Sauna Biasa',
                  'tarif_member' => 28000,
                  'tarif_normal' => 3400,
                  'tipe' => 3,
                  'level' => 0,
                  'durasi' => 30
            ),array (
                  'nama_services' => 'Sauna Rempah',
                  'tarif_member' => 37000,
                  'tarif_normal' => 44000,
                  'tipe' => 3,
                  'level' => 0,
                  'durasi' => 30
            ),
            array (
                  'nama_services' => 'Ratus (Spa Vagina)',
                  'tarif_member' => 35000,
                  'tarif_normal' => 40000,
                  'tipe' => 3,
                  'level' => 0,
                  'durasi' => 30
            ),
            array (
                  'nama_services' => 'Mandi Susu + Whirpool',
                  'tarif_member' => 120000,
                  'tarif_normal' => 130000,
                  'tipe' => 3,
                  'level' => 0,
                  'durasi' => 30
            ),
            array (
                  'nama_services' => 'Foot refleksi',
                  'tarif_member' => 45000,
                  'tarif_normal' => 49000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Body Masssage',
                  'tarif_member' => 48000,
                  'tarif_normal' => 52000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Masssage Akar Wangi',
                  'tarif_member' => 67000,
                  'tarif_normal' => 72000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Body Masssage + Foot Refleksi',
                  'tarif_member' => 80000,
                  'tarif_normal' => 89000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Message Bayi',
                  'tarif_member' => 55000,
                  'tarif_normal' => 55000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Masssage Anak',
                  'tarif_member' => 45000,
                  'tarif_normal' => 45000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Masssage Ibu Hamil',
                  'tarif_member' => 48000,
                  'tarif_normal' => 52000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Hand Therapy',
                  'tarif_member' => 29000,
                  'tarif_normal' => 32000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Back Therapy',
                  'tarif_member' => 55000,
                  'tarif_normal' => 60000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Back Therapy + Kangzu Cuping Kit',
                  'tarif_member' => 57000,
                  'tarif_normal' => 62000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Bekam Basah',
                  'tarif_member' => 80000,
                  'tarif_normal' => 85000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Bekam Kering',
                  'tarif_member' => 28000,
                  'tarif_normal' => 33000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Terapi Telinga',
                  'tarif_member' => 31000,
                  'tarif_normal' => 33000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ),
             array (
                  'nama_services' => 'Waking',
                  'tarif_member' => 80000,
                  'tarif_normal' => 85000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ), 
            array (
                  'nama_services' => 'TST(Terapi Seluruh Tubuh)',
                  'tarif_member' => 142000,
                  'tarif_normal' => 155000,
                  'tipe' => 4,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Manicure',
                  'tarif_member' => 48000,
                  'tarif_normal' => 52000,
                  'tipe' => 5,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Pedicure',
                  'tarif_member' => 48000,
                  'tarif_normal' => 52000,
                  'tipe' => 5,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Manicure + Pedicure',
                  'tarif_member' => 95000,
                  'tarif_normal' => 99000,
                  'tipe' => 5,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Manicure Cream Gehwol',
                  'tarif_member' => 95000,
                  'tarif_normal' => 105000,
                  'tipe' => 5,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Pedicure Cream Gehwol',
                  'tarif_member' => 135000,
                  'tarif_normal' => 145000,
                  'tipe' => 5,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Manicure & Pedicure Cream Gehwol',
                  'tarif_member' => 195000,
                  'tarif_normal' => 210000,
                  'tipe' => 5,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Relaxasi Untuk Terapi Sakit Kepala',
                  'tarif_member' => 30000,
                  'tarif_normal' => 32000,
                  'tipe' => 5,
                  'level' => 0,
                  'durasi' => 60
            ),
            array (
                  'nama_services' => 'Relaxi Terapi Sakit Kepala Plus',
                  'tarif_member' => 42000,
                  'tarif_normal' => 45000,
                  'tipe' => 5,
                  'level' => 0,
                  'durasi' => 60
            ),

        ));
    }
}

