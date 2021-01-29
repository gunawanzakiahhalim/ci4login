<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P13 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Case tidak bisa print',
            'update' => '15:27 30/Oct/20',
            'rootcause' => [
                'Case tidak bisa print :'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Answer : coba cek komunikasi ke PC POS' => [
                    'Ping IP EDC, apakah reply / timeout.',
                    'Kalau reply berarti komunikasi aman',
                    'Kalau RTO, cek perkabelannya, apakah sudah tersambung'
                ]
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P13/index', $data);
    }
}
