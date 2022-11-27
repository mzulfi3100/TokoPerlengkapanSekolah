<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \Myth\Auth\Models\UserModel;
use App\Models\WishlistModel;
use App\Models\ProfileModel;
use App\Models\categoriesModel;

class ProfileController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function index()
    {
        //
    }

    public function list_user()
    {
        $profileModel = new ProfileModel();
        $userProfile = $profileModel -> findAll();
        $wishlistModel = new WishlistModel();
        $wishlist = $wishlistModel -> where('id_user', user()->id)->findAll();
        $categories = new categoriesModel();
        $all_data = $categories->findAll();

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => 'active',
            'section_navbar_title5' => null,
            'hero' => 'hero hero-normal',
            'cart' => \Config\Services::cart(),
            'userProfile' => $userProfile,
            'wishlist' => $wishlist,
            'title' => 'User Profile',
            'all_data' => $all_data,
        ];

        return view('profile/list_user', $data);
    }

    public function delete_user($id_user)
    {
        $profileModel = new ProfileModel();
        $profileModel->delete($id_user);

        return redirect()->to('/list_user');
    }

    public function edit_user($id)
    {
        $wishlistModel = new WishlistModel();
        $wishlist = $wishlistModel -> where('id_user', user()->id)->findAll();
        $categories = new categoriesModel();
        $all_data = $categories->findAll();
        $profileModel = new ProfileModel();
        $userProfile = $profileModel -> find($id);

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => 'active',
            'section_navbar_title5' => null,
            'hero' => 'hero hero-normal',
            'cart' => \Config\Services::cart(),
            'wishlist' => $wishlist,
            'title' => "Edit Profil",
            'all_data' => $all_data,
        ];
        return view('temps/header', $data)
        .view('profile/edit_user', $userProfile);
    }

    public function update_user($id)
    {
        if(!$this->validate([
            'nama_lengkap' => 'required|string',
            'email' => 'required|string',
            'no_telepon' => 'required|string',
            'jenis_kelamin' => 'required|string',
            // 'tanggallahir' => 'required|string',
            'alamat' => 'required|string',
        ])){
            return redirect()->to('/edit_user/'.$id);
        }

        $profileModel = new ProfileModel();
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            // 'tanggallahir' => $this->request->getPost('tanggallahir'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $profileModel->update($id, $data);
        return redirect()->to('/list_user');

    }
}