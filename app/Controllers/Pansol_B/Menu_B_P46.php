<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P46 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Paket Konversi Vigas + Bengkel',
            'update' => '11:19 27/Oct/20',
            'rootcause' => [
                'Terkait Paket Konversi Vigas + Bengkel'
            ],
            'cwc' => ['Information - Layanan Domgas - Paket Konversi Vigas + Bengkel'],
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
        return view('B/P46/index', $data);
    }
}
