<?php

namespace App\Controllers;

use App\Models\Katalog;

class Home extends BaseController
{
    public function index()
    {
        $katalogModel = new Katalog();
        $katalog = $katalogModel -> findAll();
        $data = [
            'katalog' => $katalog,
        ];

        return view('home/landing_page', $data);
    }
    public function shopGrid()
    {
        return view('home/shopGrid');
    }
    public function contact()
    {
        return view('home/contact');
    }
    public function blog()
    {
        return view('home/blog');
    }
    public function blogDetails()
    {
        return view('home/blogDetails');
    }
    public function checkout()
    {
        return view('home/checkout');
    }
    public function shopDetails()
    {
        return view('home/shopDetails');
    }
    public function shopingCart()
    {
        return view('home/shopingCart');
    }
}
