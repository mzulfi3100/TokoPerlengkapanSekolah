<?php

namespace App\Controllers;

class form extends BaseController
{

    public function login()
    {

        return view('registration/login');
    }
    public function register()
    {

        return view('registration/register');
    }
    public function forgot()
    {

        return view('registration/forgot');
    }
    public function reset_password()
    {
        $token = $this->request->getGet('token');
        $data = [
            'token' => $token,
        ];
        return view('registration/reset', $data);
    }
}