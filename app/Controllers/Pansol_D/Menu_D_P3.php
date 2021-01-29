<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P3 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Cara Manualkan Pompa',
            'update' => '15:21 30/Oct/20',
            'rootcause' => [
                'Informasi Terkait : CARA MANUALKAN POMPA : untuk manual pompa tatsuno'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'untuk manual pompa tatsuno'
            ],
            'tatsuno' => [
                '(merk TATSUNO)' => [
                    'pencet E',
                    '2222',
                    'enter',
                    '18',
                    'enter',
                    '1',
                    'enter',
                    'pencet E'
                ]
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P3/index', $data);
    }
}
