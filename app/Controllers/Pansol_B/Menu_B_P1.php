<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P1 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Agen/Pangkalan LPG Membanting Tabung',
            'update' => '10:24 27/Oct/20',
            'rootcause' => [
                'Terkait Agen/Pangkalan LPG Membanting Tabung'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Agen/Pangkalan LPG Membanting Tabung'],
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
        return view('B/P1/index', $data);
    }
}
