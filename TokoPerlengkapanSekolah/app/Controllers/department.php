<?php

namespace App\Controllers;

class department extends BaseController
{

    public function backpack()
    {


        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
        ];
        return view('department/backpack', $data);
    }
    public function belt()
    {


        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
        ];
        return view('department/belt', $data);
    }
    public function hat()
    {


        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
        ];
        return view('department/hat', $data);
    }
    public function shoes()
    {


        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
        ];
        return view('department/shoes', $data);
    }
    public function stationery()
    {


        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
        ];
        return view('department/stationery', $data);
    }
    public function tie()
    {


        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
        ];
        return view('department/tie', $data);
    }
    public function uniforms()
    {


        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
        ];
        return view('department/uniforms', $data);
    }
}
