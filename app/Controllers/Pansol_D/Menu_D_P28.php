<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P28 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Tidak Bisa Menarik serial Number Device',
            'update' => '15:56 30/Oct/20',
            'rootcause' => [
                'Tidak Bisa Menarik serial Number Device'
            ],
            'gambar' => 'invaliddivice.jpg',
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Solusi : Coba di restart edc nya.',
                'Password : PCS789PINS'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P28/index', $data);
    }
}
