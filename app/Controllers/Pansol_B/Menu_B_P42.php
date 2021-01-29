<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P42 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Menanyakan paket konversi Vigas + bengkel',
            'update' => 'update',
            'rootcause' => [
                'Menanyakan paket konversi Vigas + bengkel'
            ],
            'cwc' => ['Information - Layanan Domgas - Menanyakan paket konversi Vigas + bengkel'],
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
            'sla' => 'FCR'
        ];
        return view('B/P42/index', $data);
    }
}
