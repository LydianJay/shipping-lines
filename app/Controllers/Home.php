<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {   
        if(!$this->validateSession()) {
            return redirect()->to(site_url(''));
        }
        


        echo view('admin/header', $this->data);
        echo view('admin/footer');
    }



}
