<?php

namespace App\Controllers;

class Vessel extends BaseController 
{
    private $private_data;




    private function getAllVessels()
    {
        $this->private_data['vessels'] = $this->db->table('vessel')->get()->getResult();
    }


    public function index()
    {
        
        $this->getAllVessels();
        echo view('admin/header', $this->data);
        echo view('admin/vessel/view', $this->private_data);
        echo view('admin/footer');
    }




    public function add()
    {

        
        $this->private_data['msg'] = session()->getFlashdata('msg');

        echo view('admin/header', $this->data);
        echo view('admin/vessel/add', $this->private_data);
        echo view('admin/footer');
    }


    public function addvessel()
    {
        $vesselname     = $this->request->getPost('vesselname');
        $capacity       = $this->request->getPost('capacity');
        $description    = $this->request->getPost('description');

        $data = [
            'name'          => $vesselname,
            'capacity'      => $capacity,
            'description'   => $description,
            'status'        => 1,
        ];

        $this->db->table('vessel')->insert($data);
        session()->setFlashdata('msg', 'Vessel Added!');
        return redirect()->to(site_url('addvessel'));
    }

}