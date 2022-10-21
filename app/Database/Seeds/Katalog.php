<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Katalog extends Seeder
{
    public function run()
    {
        $data_katalog= [
            [
            'nama_produk'    => 'Penggaris',
            'kategori_produk' => 'alat_tulis',
            'harga_produk'  => '5000',
            'stok_produk' => '100',
            'deskripsi_produk' => 'Topi yang dapat digunakan untuk siswa SD',
            'gambar_produk' => 'penggaris.jpg',
            'featured_produk' => 'yes'
            ],
            [
            'nama_produk'    => 'Sepatu NH',
            'kategori_produk' => 'sepatu',
            'harga_produk'  => '120000',
            'stok_produk' => '5',
            'deskripsi_produk' => 'Sepatu merek NH untuk siswa SD',
            'gambar_produk' => 'sepatu_sd.jpg',
            'featured_produk' => 'yes'
            ],
            [
            'nama_produk'    => 'Seragam SD',
            'kategori_produk' => 'seragam',
            'harga_produk'  => '180000',
            'stok_produk' => '3',
            'deskripsi_produk' => 'Seragam untuk anak SD',
            'gambar_produk' => 'seragam_sd.png',
            'featured_produk' => 'no'
            ],
            [
            'nama_produk'    => 'Tas SD Perempuan',
            'kategori_produk' => 'tas',
            'harga_produk'  => '100000',
            'stok_produk' => '2',
            'deskripsi_produk' => 'Tas untuk siswi SD',
            'gambar_produk' => 'tas_perempuan_sd.jpg',
            'featured_produk' => 'no'
            ],
        ];

        foreach($data_katalog as $data)
        {
            $this->db->table('katalog')->insert($data);
        }    
    }
}
