<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P41 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Menanyakan harga/stock LPG',
            'update' => '13:59 27/Oct/20',
            'rootcause' => [
                'Menanyakan harga/stock LPG'
            ],
            'cwc' => ['Information - Layanan Domgas - Menanyakan harga/stock LPG'],
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
        return view('B/P41/index', $data);
    }
}
