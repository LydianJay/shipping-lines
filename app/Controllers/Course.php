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


    public function addcourse()
    {
        $from       = $this->request->getPost('from');
        $to         = $this->request->getPost('to');
        $vesselID   = $this->request->getPost('vesselID');
        $departure  = $this->request->getPost('time');
        $date       = $this->request->getPost('date');

        $data = [
            'from_id'           => $from,
            'to_id'             => $to,
            'vessel_id'         => $vesselID,
            'departure'         => $departure,
        ];

        if($vesselID != 0 && $from != 0 && $to != 0) {
            $this->db->table('routes')->insert($data);
            session()->setFlashdata('msg', 'Course Added!');
            return redirect()->to(site_url('addcourse'));
        } else {
            session()->setFlashdata('msg', 'Course Not Added!');
            return redirect()->to(site_url('addcourse'));
        }

        
    }
}
