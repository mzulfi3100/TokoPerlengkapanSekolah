<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Katalog;
use App\Models\categoriesModel;
use App\Models\WishlistModel;


class ShopingCartController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }
    public function index()
    {
        $katalogModel = new Katalog();
        $katalog = $katalogModel -> findAll();
        $wishlistModel = new WishlistModel();
        $categoriesModel = new categoriesModel();
        $all_data = $categoriesModel->findAll();
        $wishlist = $wishlistModel -> where('id_user', user()->id)->findAll();
        $data = [
            'katalog' => $katalog,
            'wishlist' => $wishlist,
            'all_data' => $all_data,
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'cart' => \Config\Services::cart(),
        ];

        return view('home/shopingCart', $data);
    }
}
