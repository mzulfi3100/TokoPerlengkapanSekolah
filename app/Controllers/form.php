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
}