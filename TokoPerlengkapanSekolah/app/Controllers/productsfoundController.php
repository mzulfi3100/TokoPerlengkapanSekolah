<?php

namespace App\Controllers;

use App\Models\productsfoundModel;

class productsfoundController extends BaseController
{

    public function Found()
    {
        $productFound = new productsfoundModel();
        $file = $productFound->findAll();

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => 'active',
            'file' => $file,
        ];
        return view('productFound/foundSection', $data);
    }
    public function edit_product($id = false)
    {
        $productFound = new productsfoundModel();
        $data_files = $productFound->find($id);

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => 'active',
            'data_files' => $data_files,
        ];
        return view('productFound/edit_product', $data);
    }

    public function add_product()
    {
        $productFound = new productsfoundModel();
        $file = $productFound->findAll();

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => 'active',
            'file' => $file,
        ];
        return view('productFound/add_product', $data);
    }
    public function store()
    {
        $validate = $this->validate([
            'name_product' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'You Have to Fill This Field',
                ],
            ],
            'price_product' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'You Have to Fill This Field',
                ],
            ],
            'image_product' => [
                'label' => 'image_product',
                'rules' => 'uploaded[image_product]|mime_in[image_product,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'You must choose an image',
                    'mime_in' => 'Only images file',

                ],
            ],
        ]);

        // if (!$validate) {
        //     //dd($this->request->getFile('image_product'));
        //     return redirect()->back()->withInput();
        // }
        // $files = $this->request->getFile('image_product');
        // //dd($files);
        // $files->move('Assets/img/product', $files->getName());

        // $data = [
        //     'image_product' => $files->getName(),
        //     'name_product' => $this->request->getPost('name_product'),
        //     'price_product' => $this->request->getPost('price_product'),
        // ];

        // $productFound = new productsfoundModel();
        // $productFound->insert($data);

        // return redirect()->to(base_url('/Found'));
        if (!$validate) {
            //dd($this->request->getFile('image_product'));
            return redirect()->to('add_product')->withInput();
        }
        $files = $this->request->getFile('image_product');
        $names = $files->getName();
        //dd($files);
        $files->move('Assets/img/product', $names);
        $data = [
            'image_product' => $names,
            'name_product' => $this->request->getPost('name_product'),
            'price_product' => $this->request->getPost('price_product'),
        ];
        //dd($data);
        $productFound = new productsfoundModel();
        $productFound->insert($data);

        return redirect()->to(base_url('/Found'));
    }
    public function update()
    {
        $productFound = new productsfoundModel();
        $productFound->update($this->request->getPost('id'), $this->request->getPost());

        return redirect()->to(base_url('/Found'));
    }

    public function delete_Product($id = false)
    {
        $productFound = new productsfoundModel();
        $productFound->delete($id);
        return redirect()->to(base_url('/Found'));
    }
}
