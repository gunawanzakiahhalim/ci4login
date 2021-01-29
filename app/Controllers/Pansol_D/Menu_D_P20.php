<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P20 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'EDC Upgrade',
            'update' => '15:40 30/Oct/20',
            'rootcause' => [
                'EDC UPGRADE'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Tipe z90 hanya sampai versi 2.4.0 sedangkan a920 itu sampai versi 2.4.1'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P20/index', $data);
    }
}
