<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P36 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Lokasi SPBU yang menyediakan produk non BBM',
            'update' => '10:46 26/Oct/20',
            'rootcause' => [
                'Lokasi SPBU yang menyediakan produk non BBM'
            ],
            'cwc' => ['Information - Layanan BBK - Lokasi SPBU yang menyediakan produk non BBM'],
            'todolist' => [
                'FCR'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P36/index', $data);
    }
}
