<?php

namespace App\Controllers;

use App\Models\LatestProductsModel;

class latestproductController extends BaseController
{

    public function latestProductSection()
    {
        $LatestProducts = new LatestProductsModel();
        $all_latest_product = $LatestProducts->findAll();

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => 'active',
            'all_data_product' => $all_latest_product,
        ];
        return view('home/latestProductSection', $data);
    }
    public function add_latestProduct()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => 'active',

        ];
        return view('home/add_latestProduct', $data);
    }
    public function edit_latestProduct($id_latest_product = false)

    {
        $LatestProducts = new LatestProductsModel();
        $data_latestProduct = $LatestProducts->find($id_latest_product);
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => 'active',
            'data_latestProduct' => $data_latestProduct,
        ];
        return view('home/edit_latestProduct', $data);
    }
    public function latestProduct_update_proses()
    {
        $LatestProducts = new LatestProductsModel();
        $LatestProducts->update($this->request->getPost('id_latestProduct'), $this->request->getPost());

        return redirect()->to(base_url('/latestProductSection'));
    }
    public function latestProduct_proses()
    {
        $validate = $this->validate([
            'name_latest' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'You Have to Fill This Field',
                ],
            ],
            'price_latest' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'You Have to Fill This Field',
                ],
            ],
            'images_latest' => [
                'label' => 'images_latest',
                'rules' => 'uploaded[images_latest]|max_size[images_latest,5120]|is_image[images_latest]|mime_in[images_latest,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'You must choose an image',
                    'max_size' => 'Maximum File 5 Mb',
                    'is_image' => 'Only images file',
                    'mime_in' => 'Only images file',
                ],
            ],
        ]);
        if (!$validate) {
            //dd($this->request->getFile('images_latest'));
            return redirect()->to('add_latestProduct')->withInput();
        }
        $file_images_latest = $this->request->getFile('images_latest');
        $name = $file_images_latest->getName();
        $file_images_latest->move('Assets/img/latestproduct', $name);
        $data = [
            'image_latest' => $name,
            'name_latest' => $this->request->getPost('name_latest'),
            'price_latest' => $this->request->getPost('price_latest'),
        ];
        // dd($data);
        $LatestProducts = new LatestProductsModel();
        $LatestProducts->insert($data);

        return redirect()->to(base_url('/latestProductSection'));
    }
    public function delete_latestProduct($id_latest_product = false)
    {
        $LatestProducts = new LatestProductsModel();
        $LatestProducts->delete($id_latest_product);
        return redirect()->to(base_url('/latestProductSection'));
    }
}
