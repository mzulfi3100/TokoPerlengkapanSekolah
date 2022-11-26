<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Katalog;
use App\Models\categoriesModel;
use App\Models\WishlistModel;

class PelangganController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function index()
    {
        $katalogModel = new Katalog();
        $katalog = $katalogModel -> findAll();

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => null,
            'katalog' => $katalog,
            'cart' => \Config\Services::cart(),
        ];

        return view('pelanggan/index', $data);
    }

    public function cari()
    {
        $katalogModel = new Katalog();
        $categories = new categoriesModel();
        $wishlistModel = new WishlistModel();
        $all_data = $categories->findAll();
        $cari = $this->request->getGet('cari');
        $katalog = $katalogModel->where('nama_produk', $cari)->findAll();

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => null,
            'katalog' => $katalog,
            'all_data' => $all_data,
            'wishlist' => $wishlistModel->where('id_user', user()->id)->findAll(),
            'cart' => \Config\Services::cart(),
        ];

        return view('home/shopGrid', $data);
    }

    public function search()
    {
        $katalogModel = new Katalog();
        $min =  $this->request->getPost('min');
        $max =  $this->request->getPost('max');
        $sql = "harga_produk >= $min AND harga_produk <= $max";
        $katalog = $katalogModel->where($sql)->findAll();
        $categories = new categoriesModel();
        $wishlistModel = new WishlistModel();
        $all_data = $categories->findAll();

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => null,
            'katalog' => $katalog,
            'all_data' => $all_data,
            'wishlist' => $wishlistModel->where('id_user', user()->id)->findAll(),
            'cart' => \Config\Services::cart(),
        ];

        return view('home/shopGrid', $data);
    }

    public function beli_produk()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => null,
        ];
        return view('pelanggan/beli_produk', $data);
    }

    public function kategori()
    {
        $katalogModel = new katalog();
        $kategori = $this->request->getGet('kategori');
        $katalog = $katalogModel -> where('id_kategori', $kategori) -> findAll();

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => null,
            'katalog' => $katalog,
            'cart' => \Config\Services::cart(),
        ];

        return view('home/shopGrid', $data);
    }
}
