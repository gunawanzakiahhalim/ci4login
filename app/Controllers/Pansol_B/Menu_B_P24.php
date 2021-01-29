<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P24 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Keluhan Vigas dan BBG',
            'update' => '10:44 27/Oct/20',
            'rootcause' => [
                'Terkait Keluhan Vigas dan BBG'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Keluhan Vigas dan BBG'],
            'todolist' => [
                'todolist',
                'todolist',
                'todolist'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P24/index', $data);
    }
}
