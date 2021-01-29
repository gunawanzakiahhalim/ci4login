<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P48 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Pengaturan antrian konsumen pembelian LPG',
            'update' => '13:58 27/Oct/20',
            'rootcause' => [
                'Terkait Pengaturan antrian konsumen pembelian LPG'
            ],
            'cwc' => ['Saran - Layanan Domgas - Pengaturan antrian konsumen pembelian LPG'],
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
        return view('B/P48/index', $data);
    }
}
