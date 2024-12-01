<?php

namespace App\Controllers;

class Port extends BaseController 
{
    private $private_data;




    private function getAllPorts()
    {
        $this->private_data['ports'] = $this->db->table('port')->get()->getResult();
    }


    public function index()
    {
        
        $this->getAllPorts();
        echo view('admin/header', $this->data);
        echo view('admin/port/view', $this->private_data);
        echo view('admin/footer');
    }




    public function add()
    {

        
        $this->private_data['msg'] = session()->getFlashdata('msg');

        echo view('admin/header', $this->data);
        echo view('admin/port/add', $this->private_data);
        echo view('admin/footer');
    }


    public function addport()
    {
        $portname = $this->request->getPost('portname');
        $placename = $this->request->getPost('placename');


        $data = [
            'port_name' => $portname,
            'place_name' => $placename
        ];

        $this->db->table('port')->insert($data);
        session()->setFlashdata('msg', 'Port Added!');
        return redirect()->to(site_url('addport'));
    }

}