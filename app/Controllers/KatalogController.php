<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Katalog;

class KatalogController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function index()
    {
        //
    }

    public function list_katalog()
    {
        $katalogModel = new Katalog();
        $katalog = $katalogModel -> findAll();

        $data = [
            'title' => 'Katalog',
            'katalog' => $katalog
        ];

        return view('templates/header', $data)
            . view('pegawai/katalog/list_katalog', $data)
            . view('templates/footer');
    }

    public function create_katalog()
    {
        $data = [
            'title' => 'Create Katalog',
        ];

        return view('templates/header', $data)
        . view('pegawai/katalog/create_katalog')
        . view('templates/footer');
    }

    public function store_katalog()
    {
        if(!$this->validate([
            'nama_produk' => 'required|string',
            'kategori_produk' => 'required|string',
            'harga_produk' => 'required|numeric',
            'stok_produk' => 'required|numeric',
            'deskripsi_produk' => 'required|string',
        ])){
            return redirect()->to('/create_katalog');
        }

        $validated = $this->validate([
            'image' => [
                'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[image,4096]',
            ],
        ]);

        if (!$validated) {
            return redirect()->to('/create_katalog');
        }

        $katalogModel = new Katalog();
        
        $file = $this->request->getFile('image');
        $gambar_produk = $file->getRandomName();
        $file->move('uploads', $gambar_produk);

        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'kategori_produk' => $this->request->getPost('kategori_produk'),
            'harga_produk' => $this->request->getPost('harga_produk'),
            'stok_produk' => $this->request->getPost('stok_produk'),
            'deskripsi_produk' => $this->request->getPost('deskripsi_produk'),
            'gambar_produk' => $gambar_produk,
            'featured_produk' => $this->request->getPost('featured_produk'),
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

        $data = [
            'title' => "Edit Katalog"
        ];

        return view('templates/header', $data)
        . view('pegawai/katalog/edit_katalog', $katalog)
        . view('templates/footer');
    }

    public function update_katalog($id_produk)
    {
        if(!$this->validate([
            'nama_produk' => 'required|string',
            'kategori_produk' => 'required|string',
            'harga_produk' => 'required|numeric',
            'stok_produk' => 'required|numeric',
            'deskripsi_produk' => 'required|string',
        ])){
            return redirect()->to('/edit_katalog/'.$id_produk);
        }

        $katalogModel = new Katalog();
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'kategori_produk' => $this->request->getPost('kategori_produk'),
            'harga_produk' => $this->request->getPost('harga_produk'),
            'stok_produk' => $this->request->getPost('stok_produk'),
            'deskripsi_produk' => $this->request->getPost('deskripsi_produk'),
            'featured_produk' => $this->request->getPost('featured_produk'),
        ];
        $katalogModel->update($id_produk, $data);

        return redirect()->to('/list_katalog');
    }
}
