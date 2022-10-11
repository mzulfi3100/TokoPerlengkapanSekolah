<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('loginPage/index');
    }
    public function register()
    {
        return view('loginPage/register');
    }
}
