<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Katalog;

class PelangganController extends BaseController
{
    public function index()
    {
        $katalogModel = new Katalog();
        $katalog = $katalogModel -> findAll();

        $data = [
            'katalog' => $katalog
        ];

        return view('pelanggan/index', $data);
    }

    public function cari()
    {
        $katalogModel = new Katalog();
        $cari = $this->request->getGet('cari');
        $katalog = $katalogModel->where('nama_produk', $cari)->findAll();

        $data = [
            'katalog' => $katalog
        ];

        return view('pelanggan/index', $data);
    }

    public function search()
    {
        $katalogModel = new Katalog();
        $min =  $this->request->getPost('min');
        $max =  $this->request->getPost('max');
        $sql = "harga_produk >= $min AND harga_produk <= $max";
        $katalog = $katalogModel->where($sql)->findAll();

        $data = [
            'katalog' => $katalog
        ];

        return view('pelanggan/index', $data);
    }
}
