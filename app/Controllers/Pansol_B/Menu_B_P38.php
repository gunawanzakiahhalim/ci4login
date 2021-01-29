<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P38 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'LPG tidak melayani penjualan selama 24 jam',
            'update' => '13:52 27/Oct/20',
            'rootcause' => [
                'Terkait LPG tidak melayani penjualan selama 24 jam'
            ],
            'cwc' => ['Information - Layanan Domgas - LPG tidak melayani penjualan selama 24 jam'],
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
            'sla' => '1x24 Jam'
        ];
        return view('B/P38/index', $data);
    }
}
