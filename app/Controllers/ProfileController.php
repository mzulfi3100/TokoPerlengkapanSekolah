<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfileModel;

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

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => 'active',
            'section_navbar_title5' => null,
            'cart' => \Config\Services::cart(),
            'userProfile' => $userProfile,
            'title' => 'User Profile',
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
        $profileModel = new ProfileModel();
        $userProfile = $profileModel->find($id);

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => 'active',
            'section_navbar_title5' => null,
            'cart' => \Config\Services::cart(),
            'title' => "Edit Profil"
        ];
        return view('temps/header', $data)
        . view('profile/edit_user', $userProfile);
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
