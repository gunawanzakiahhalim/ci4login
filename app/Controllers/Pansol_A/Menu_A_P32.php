<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P32 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'List SPBU BBM Kemasan/PDS',
            'update' => '10:39 26/Oct/20',
            'rootcause' => [
                'List SPBU BBM Kemasan/PDS'
            ],
            'cwc' => ['Information - Layanan BBK - List SPBU BBM Kemasan/PDS'],
            'todolist' => [
                'Cek source SPBU PDS',
                'FCR'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P32/index', $data);
    }
}
