<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P48 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Penyalahgunaan BBM Subsidi',
            'update' => '9:43 22/Oct/20',
            'rootcause' => [
                'rootcause',
                'rootcause',
                'rootcause'
            ],
            'cwc' => ['Complaint - Layanan BBK - Penyalahgunaan BBM Subsidi'],
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
        return view('A/P48/index', $data);
    }
}
