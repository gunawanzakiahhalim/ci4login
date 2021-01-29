<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P57 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'PIC/Alamat/Tlp',
            'update' => '11:21 27/Oct/20',
            'rootcause' => [
                'Terkait PIC/Alamat/Tlp'
            ],
            'cwc' => ['Information - Layanan Domgas - PIC/Alamat/Tlp'],
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
            'sla' => 'FCR'
        ];
        return view('B/P57/index', $data);
    }
}
