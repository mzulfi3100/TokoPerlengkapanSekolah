<?php

namespace App\Controllers;

use App\Models\FeaturedProductModel;

class featuredproductController extends BaseController
{

    public function Section()
    {
        $product = new FeaturedProductModel();
        $all_data = $product->findAll();

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => 'active',
            'all_data' => $all_data,
        ];
        return view('featuredProduct/section', $data);
    }
}
