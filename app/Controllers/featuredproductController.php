<?php

namespace App\Controllers;

use App\Models\Katalog;
use App\Models\WishlistModel;

class featuredproductController extends BaseController
{

    public function Section()
    {
        $katalogModel = new Katalog();
        $katalog = $katalogModel->findAll();
        $wishlistModel = new WishlistModel();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => 'active',
            'hero' => 'hero hero-normal',
            'wishlist' => $wishlistModel->findAll(),
            'katalog' => $katalog,
            'cart' => \Config\Services::cart(),
        ];

        return view('featuredProduct/section', $data);
    }

    public function add($id_produk)
    {
        $katalogModel = new Katalog();
        $data = [
            'featured_produk' => "yes",
        ];
        $katalogModel->update($id_produk, $data);

        return redirect()->to("/featuredSection");
    }

    public function delete($id_produk)
    {
        $katalogModel = new Katalog();
        $data = [
            'featured_produk' => "no",
        ];
        $katalogModel->update($id_produk, $data);

        return redirect()->to("/featuredSection");
    }
}