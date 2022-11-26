<?php

namespace App\Controllers;

use App\Models\Katalog;
use App\Models\WishlistModel;

class productsfoundController extends BaseController
{

    public function Found()
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

        return view('productFound/foundSection', $data);
    }

    public function add($id_produk)
    {
        $katalogModel = new Katalog();
        $data = [
            'product_found' => "yes",
        ];
        $katalogModel->update($id_produk, $data);

        return redirect()->to("/Found");
    }

    public function delete($id_produk)
    {
        $katalogModel = new Katalog();
        $data = [
            'product_found' => "no",
        ];
        $katalogModel->update($id_produk, $data);

        return redirect()->to("/Found");
    }
}