<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P28 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Keunggulan Produk BBM Pertamina',
            'update' => '10:36 26/Oct/20',
            'rootcause' => [
                'Pelanggan ingin mengetahui keunggulan produk BBM Pertamina.'
            ],
            'cwc' => ['Information - Layanan BBK - Keunggulan Produk BBM Pertamina'],
            'todolist' => [
                'Agent cek source. Infokan sesuai data.',
                'FCR'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P28/index', $data);
    }
}
