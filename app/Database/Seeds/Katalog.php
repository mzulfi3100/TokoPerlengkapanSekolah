<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Katalog extends Seeder
{
    public function run()
    {
        $data_katalog= [
            [
            'nama_produk'    => 'Topi',
            'harga_produk'  => '80000',
            'stok_produk' => '10',
            'deskripsi_produk' => 'Topi yang dapat digunakan untuk siswa SD',
            ],
        ];

        foreach($data_katalog as $data)
        {
            $this->db->table('katalog')->insert($data);
        }    
    }
}
