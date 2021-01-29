<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P25 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Layar tidak bisa respon / Hank / Hang',
            'update' => '15:36 30/Oct/20',
            'rootcause' => [
                'Informasi mengenai :Layar tidak bisa respon / Hank / Hang :'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Solusi :' => [
                    'Matikan paksa komputer dengan cara Ditekan tombol CPU yang lama sampai layar mati, lalu tekan lagi sd layar nyala lagi'
                ]
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P25/index', $data);
    }
}
