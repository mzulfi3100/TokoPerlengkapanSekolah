<?php

namespace App\Controllers;

use App\Models\categoriesModel;
use App\Models\productsfoundModel;


class Home extends BaseController
{
    public function index()
    {
        $categories = new categoriesModel();
        $all_data = $categories->findAll();

        $data = [
            'section_navbar_title1' => 'active',
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'all_data' => $all_data,
        ];

        return view('home/landing_page', $data);
    }
    public function shopGrid()
    {
        $productFound = new productsfoundModel();
        $file = $productFound->findAll();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'file' => $file
        ];
        return view('home/shopGrid', $data);
    }
    public function checkout()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
        ];
        return view('home/checkout', $data);
    }
    public function shopDetails()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
        ];
        return view('home/shopDetails', $data);
    }

    public function shopingCart()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
        ];
        return view('home/shopingCart', $data);
    }
    public function loginRegister()
    {
        return view('home/loginRegister');
    }
    public function register()
    {
        return view('home/register');
    }
    public function admin()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => 'active',
            'hero' => 'hero hero-normal',
        ];
        return view('home/admin', $data);
    }
    public function categoriesSection()
    {
        $categories = new categoriesModel();
        $all_data = $categories->findAll();

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => 'active',
            'hero' => 'hero hero-normal',
            'all_data' => $all_data,
        ];
        return view('home/categoriesSection', $data);
    }
    public function edit_categories($id = false)

    {
        $categories = new categoriesModel();
        $data_categories = $categories->find($id);
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => 'active',
            'hero' => 'hero hero-normal',
            'data_categories' => $data_categories,
        ];
        return view('home/edit_categories', $data);
    }
    public function add_categories()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => 'active',
            'hero' => 'hero hero-normal',

        ];
        return view('home/add_categories', $data);
    }
    public function categories_update_proses()
    {
        $categories = new categoriesModel();
        $categories->update($this->request->getPost('id_categories'), $this->request->getPost());

        return redirect()->to(base_url('/categoriesSection'));
    }
    public function categories_proses()
    {
        $validate = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'You Have to Fill This Field',
                ],
            ],
            'images' => [
                'label' => 'Images',
                'rules' => 'uploaded[images]|max_size[images,5120]|is_image[images]|mime_in[images,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'You must choose an image',
                    'max_size' => 'Maximum File 5 Mb',
                    'is_image' => 'Only images files',
                    'mime_in' =>
                    'Only images file',
                ],
            ],
        ]);
        if (!$validate) {

            return redirect()->back()->withInput();
        }
        $file_images = $this->request->getFile('images');
        // dd($file_images);
        $file_images->move('Assets/img/categories', $file_images->getName());

        $data = [
            'images' =>
            $file_images->getName(),
            'name' => $this->request->getPost('name'),
        ];


        $categories = new categoriesModel();
        $categories->insert($data);

        return redirect()->to(base_url('/categoriesSection'));
    }

    public function delete_categories($id = false)
    {
        $categories = new categoriesModel();
        $categories->delete($id);
        return redirect()->to(base_url('/categoriesSection'));
    }
}
