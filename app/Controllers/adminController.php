<?php

namespace App\Controllers;

class adminController extends BaseController
{

    public function dashboard()
    {
        return view('admin/dashboard');
    }
}