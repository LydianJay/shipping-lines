<?php

namespace App\Controllers;

class Course extends BaseController
{
    private $private_data;




    private function getAllCourse()
    {
        $this->private_data['course'] = $this->db->table('routes')->get()->getResult();
    }


    private function getVessels() 
    {
        $this->private_data['vessels'] = $this->db->table('vessel')->get()->getResult();
    }

    private function getPorts()
    {
        $this->private_data['ports'] = $this->db->table('port')->get()->getResult();
    }

    public function index()
    {

        $this->getAllCourse();
        echo view('admin/header', $this->data);
        echo view('admin/course/view', $this->private_data);
        echo view('admin/footer');
    }




    public function add()
    {


        $this->private_data['msg'] = session()->getFlashdata('msg');
        $this->getVessels();
        $this->getPorts();

        echo view('admin/header', $this->data);
        echo view('admin/course/add', $this->private_data);
        echo view('admin/footer');
    }


    // public function addvessel()
    // {
    //     $vesselname     = $this->request->getPost('vesselname');
    //     $capacity       = $this->request->getPost('capacity');
    //     $description    = $this->request->getPost('description');

    //     $data = [
    //         'name'          => $vesselname,
    //         'capacity'      => $capacity,
    //         'description'   => $description,
    //         'status'        => 1,
    //     ];

    //     $this->db->table('vessel')->insert($data);
    //     session()->setFlashdata('msg', 'Vessel Added!');
    //     return redirect()->to(site_url('addvessel'));
    // }
}
