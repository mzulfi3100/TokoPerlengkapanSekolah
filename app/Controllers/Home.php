<?php

namespace App\Controllers;

use App\Models\Katalog;

class Home extends BaseController
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
    public function cek()
    {
        $cart = \Config\Services::cart();
        // $cart->destroy();
        $response = $cart->contents();
        echo '<pre>';
        print_r($response);
        echo '</pre>';
    }
    public function add(){
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $this->request->getPost('id'),
            'qty'     => 1,
            'price'   => $this->request->getPost('price'),
            'name'    => $this->request->getPost('name'),
            'options' => array('gambar' => $this->request->getPost('gambar'))
        ));
        session()->setflashdata('pesan', $this->request->getPost('name'));
        return redirect()->to(base_url('home'));
    }
    public function clear(){
        $cart = \Config\Services::cart();
        $cart->destroy();
    }
}
