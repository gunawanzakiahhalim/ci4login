<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P49 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Permintaan data realisasi/penjualan BBM',
            'update' => '11:13 26/Oct/20',
            'rootcause' => [
                'rootcause',
                'rootcause',
                'rootcause'
            ],
            'cwc' => ['Information - Layanan BBK - Permintaan data realisasi/penjualan BBM'],
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
        return view('A/P49/index', $data);
    }
}
