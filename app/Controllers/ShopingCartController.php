<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Katalog;

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
        $data = [
            'katalog' => $katalog,
            'cart' => \Config\Services::cart(),
        ];

        return view('home/shopingCart', $data);
    }
}
