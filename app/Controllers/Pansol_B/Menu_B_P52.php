<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P52 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Permintaan data LPG di SPBU/Bright store',
            'update' => '14:03 27/Oct/20',
            'rootcause' => [
                'Terkait Permintaan data LPG di SPBU/Bright store'
            ],
            'cwc' => ['Information - Layanan Domgas - Permintaan data LPG di SPBU/Bright store'],
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
        return view('B/P52/index', $data);
    }
}
