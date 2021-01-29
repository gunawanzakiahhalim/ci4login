<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P49 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Penggunan seragam lengkap bagi penjaga toko',
            'update' => '13:56 27/Oct/20',
            'rootcause' => [
                'Terkait Penggunan seragam lengkap bagi penjaga toko'
            ],
            'cwc' => ['Saran - Layanan Domgas - Penggunan seragam lengkap bagi penjaga toko'],
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
        return view('B/P49/index', $data);
    }
}
