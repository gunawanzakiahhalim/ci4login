<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P15 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'EDC Invalid Paramaters',
            'update' => '15:53 30/Oct/20',
            'rootcause' => [
                'EDC Invalid Paramaters'
            ],
            'gambar' => 'invalidparameter.jpg',
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Solusi :' => [
                    'Site brp',
                    'Minta SN',
                    'Laporkan ke pins untuk update POT'
                ]
            ],
            'edc' => 'paymentpertamax.jpg',
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P15/index', $data);
    }
}
