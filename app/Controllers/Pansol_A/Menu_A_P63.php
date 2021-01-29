<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P63 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Spesifikasi Produk BBM',
            'update' => '11:01 26/Oct/20',
            'rootcause' => [
                'Informasi terkait spesifikasi BBM'
            ],
            'cwc' => ['Information - Layanan BBK - Spesifikasi Produk BBM'],
            'todolist' => [
                'Eksisting by Diana',
                'FCR'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P63/index', $data);
    }
}
