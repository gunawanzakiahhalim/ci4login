<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P34 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Lokasi SPBU dan Jenis Produk yang dijual',
            'update' => '10:42 26/Oct/20',
            'rootcause' => [
                'Lokasi SPBU dan Jenis Produk yang dijual'
            ],
            'cwc' => ['Information - Layanan BBK - Lokasi SPBU dan Jenis Produk yang dijual'],
            'todolist' => [
                'Cek source Data SPBU-Produk Update Juni 2019 (WA Perisai Pertamina)/DIANA',
                'FCR'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P34/index', $data);
    }
}
