<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P45 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Penggunaan Kelengkapan operator SPBU',
            'update' => '11:11 26/Oct/20',
            'rootcause' => [
                'rootcause',
                'rootcause',
                'rootcause'
            ],
            'cwc' => ['Information - Layanan BBK - Penggunaan Kelengkapan operator SPBU'],
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
            'sla' => '1x24 Jam'
        ];
        return view('A/P45/index', $data);
    }
}
