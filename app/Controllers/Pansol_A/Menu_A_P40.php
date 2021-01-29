<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P40 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'MSDS Produk BBM',
            'update' => '11:10 26/Oct/20',
            'rootcause' => [
                'rootcause',
                'rootcause',
                'rootcause'
            ],
            'cwc' => ['Information - Layanan BBK - MSDS Produk BBM'],
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
            'sla' => 'Jam'
        ];
        return view('A/P40/index', $data);
    }
}
