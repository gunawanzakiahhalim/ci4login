<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P11 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Harga LPG belum terupdate pada barcode',
            'update' => '13:50 27/Oct/20',
            'rootcause' => [
                'Terkait Harga LPG belum terupdate pada barcode'
            ],
            'cwc' => ['Information - Layanan Domgas - Harga LPG belum terupdate pada barcode'],
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
            'sla' => '1x24 Jam'
        ];
        return view('B/P11/index', $data);
    }
}
