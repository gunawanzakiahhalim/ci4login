<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P14 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Informasi Harga BBM',
            'update' => '13:31 12/Nov/20',
            'rootcause' => [
                'Informasi Harga BBM'
            ],
            'cwc' => ['Information - Layanan BBK - Menanyakan harga BBM'],
            'todolist' => [
                'Dapat dilihat di https://www.pertaminafuels.com/harga-dan-lokasi',
                'FCR'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P14/index', $data);
    }
}
