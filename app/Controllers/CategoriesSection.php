<?php

namespace App\Controllers;

class CategoriesSection extends BaseController
{

    public function secssss()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => 'active',
            'cart' => \Config\Services::cart(),
        ];
        return view('categories/section', $data);
    }
}
