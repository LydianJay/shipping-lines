<?php

namespace App\Controllers;

class Account extends BaseController
{

    public function index()
    {
        echo view('account/login', $this->data);
    }


    

    public function auth() 
    {
        $username   = $this->request->getPost('username');
        $password   = hash('sha256', $this->request->getPost('password'));
        $res        = $this->db->table('admin')
                    ->where('username', $username)
                    ->where('pass', $password)
                    ->get()
                    ->getResult();

        
        if(count($res) >= 1) {
            session()->set('auth', 'ok');
            return redirect()->to(site_url('dashboard'));
        }
        else {
            $this->setMessage('Invalid Username or Password!');
            return redirect()->to(site_url(''));
        }

    }


    public function logout()
    {
        $this->invalidateSession();
        return redirect()->to(site_url(''));
    }


}
