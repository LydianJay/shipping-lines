<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        $this->dashboard();
    }


    public function dashboard()
    {

        echo view('admin/header', $this->data);
        echo view('admin/footer');
    }
}
