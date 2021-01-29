<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P43 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Menanyakan Prosedur Menjadi Mitra',
            'update' => '14:01 27/Oct/20',
            'rootcause' => [
                'Menanyakan prosedur menjadi mitra'
            ],
            'cwc' => ['Information - Layanan Domgas - Menanyakan prosedur menjadi mitra'],
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
        return view('B/P43/index', $data);
    }
}
