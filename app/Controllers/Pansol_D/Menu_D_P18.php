<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P18 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'EDC tidak berfungsi, keterangan “invalid configuration” sebabnya edc tidak connect ke POS',
            'update' => '15:42 30/Oct/20',
            'rootcause' => [
                'EDC tidak berfungsi, keterangan “invalid configuration” sebabnya edc tidak connect ke POS'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Solusi :' => [
                    'Restart edc dan log out Gsms printer server nya',
                    'Jika belum bisa, restart pc pos'
                ]
            ],
            'gambar' => 'pcpos.jpg',
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P18/index', $data);
    }
}
