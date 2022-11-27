<?php

namespace App\Controllers;

use App\Models\Katalog;
use App\Models\WishlistModel;
use App\Models\categoriesModel;

class featuredproductController extends BaseController
{

    public function Section()
    {
        $categories = new categoriesModel();
        $all_data = $categories->findAll();
        $katalogModel = new Katalog();
        $katalog = $katalogModel->paginate(10, 'featured');
        $wishlistModel = new WishlistModel();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => 'active',
            'hero' => 'hero hero-normal',
            'wishlist' => $wishlistModel->where('id_user', user()->id)->findAll(),
            'all_data' => $all_data,
            'katalog' => $katalog,
            'pager' => $katalogModel->pager,
            'nomor' =>  nomor($this->request->getVar('page_featured'), 10),
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