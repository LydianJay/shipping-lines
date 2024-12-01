<?php

namespace App\Controllers;

class Booking extends BaseController
{

    public function index()
    {
        echo view('booking/view', $this->data);
    }


}
