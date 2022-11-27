<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Katalog;
use App\Models\Checkout;
use App\Models\Bank;
use App\Models\categoriesModel;

class KatalogController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function index()
    {
        $checoutModel = new Checkout();
        $katalogModel = new Katalog();
        $bankModel = new Bank();
        $checkout = $checoutModel->findAll();
        $katalog = $katalogModel->findAll();
        $bank = $bankModel->findAll();
        $data = [
            'checkout' => $checkout,
            'katalog' => $katalog,
            'bank' => $bank,
        ];
        return view('pegawai/dashboard', $data);
    }

    public function list_katalog()
    {
        $katalogModel = new Katalog();
        $katalog = $katalogModel->join('categories_home', "categories_home.id = katalog.id_kategori");

        $data = [
            'katalog' => $katalog->paginate(10, 'katalog'),
            'pager' => $katalogModel->pager,
            'nomor' =>  nomor($this->request->getVar('page_katalog'), 10),
        ];

        return view('pegawai/katalog/list_katalog', $data);
    }

    public function create_katalog()
    {
        $categories = new categoriesModel();
        $all_data = $categories->findAll();
        $data = [
            'all_data' => $all_data,
        ];
        return view('pegawai/katalog/create_katalog', $data);
    }

    public function store_katalog()
    {
        if(!$this->validate([
            'nama_produk' => 'required|string',
            'id_kategori' => 'required|numeric',
            'harga_produk' => 'required|numeric',
            'berat_produk' => 'required|numeric',
            'deskripsi_produk' => 'required|string',
        ])){
            return redirect()->to('/create_katalog');
        }

        // $validated = $this->validate([
        //     'image' => [
        //         'uploaded[image]'
        //         . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png]'
        //         . '|max_size[image,4096]',
        //     ],
        // ]);

        // if (!$validated) {
        //     return redirect()->to('/create_katalog');
        // }

        $katalogModel = new Katalog();
        
        $file = $this->request->getFile('image');
        $gambar_produk = $file->getRandomName();
        $file->move('uploads', $gambar_produk);

        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'id_kategori' => $this->request->getPost('id_kategori'),
            'harga_produk' => $this->request->getPost('harga_produk'),
            'berat_produk' => $this->request->getPost('berat_produk'),
            'deskripsi_produk' => $this->request->getPost('deskripsi_produk'),
            'featured_produk' => "no",
            'product_found' => "yes",
            'gambar_produk' => $gambar_produk,
        ];  
        $katalogModel->save($data);

        return redirect()->to('/list_katalog');
    }

    public function delete_katalog($id_produk)
    {
        $katalogModel = new Katalog();
        $katalogModel->delete($id_produk);

        return redirect()->to('/list_katalog');
    }

    public function edit_katalog($id_produk)
    {
        $katalogModel = new Katalog();
        $katalog = $katalogModel->find($id_produk);
        $categories = new categoriesModel();
        $all_data = $categories->findAll();
        $data = [
            'title' => "Edit Katalog",
            'all_data' => $all_data,
        ];
        return view('temps/header', $data)
        .view('pegawai/katalog/edit_katalog', $katalog);
    }

    public function update_katalog($id_produk)
    {
        if(!$this->validate([
            'nama_produk' => 'required|string',
            'kategori_produk' => 'required|numeric',
            'harga_produk' => 'required|numeric',
            'berat_produk' => 'required|numeric',
            'deskripsi_produk' => 'required|string',
        ])){
            return redirect()->to('/edit_katalog/'.$id_produk);
        }

        $validated = $this->validate([
            'gambar_produk' => [
                'label' => 'Image File',
                'rules' => 'uploaded[gambar_produk]'
                    . '|is_image[gambar_produk]'
                    . '|mime_in[gambar_produk,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[gambar_produk,1000]',
            ],
        ]);

        if (!$validated) {
            return redirect()->to('/edit_katalog/'.$id_produk);
        }

        $file = $this->request->getFile('gambar_produk');
        $gambar_produk = $file->getRandomName();
        $file->move('uploads', $gambar_produk);

        $katalogModel = new Katalog();
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'kategori_produk' => $this->request->getPost('kategori_produk'),
            'harga_produk' => $this->request->getPost('harga_produk'),
            'berat_produk' => $this->request->getPost('stok_produk'),
            'deskripsi_produk' => $this->request->getPost('deskripsi_produk'),
            'gambar_produk' => $gambar_produk,
        ];
        $katalogModel->update($id_produk, $data);

        return redirect()->to('/list_katalog');
    }

    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $katalogModel = new Katalog();
        $katalog = $katalogModel->join('categories_home', "categories_home.id = katalog.id_kategori")
        ->like('nama_produk', $keyword)->orLike('name', $keyword)->orLike('harga_produk', $keyword)->orLike('berat_produk', $keyword);

        $data = [
            'katalog' => $katalog->paginate(10, 'katalog'),
            'pager' => $katalogModel->pager,
            'nomor' =>  nomor($this->request->getVar('page_katalog'), 10),
        ];

        return view('pegawai/katalog/list_katalog', $data);
    }
}
