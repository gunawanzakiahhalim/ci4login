<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P65 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Syarat dan Ketentuan RFID',
            'update' => '11:03 26/Oct/20',
            'rootcause' => [
                'Cara menggunakan/ mendapatkan kartu RFID'
            ],
            'cwc' => ['Information - Layanan BBK - Syarat dan Ketentuan RFID'],
            'todolist' => [
                'Informasi eksisting by Diana'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P65/index', $data);
    }
}
