<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P2 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Aplikasi tidak bisa dibuka setelah update di iOS',
            'update' => '13:59 30/Oct/20',
            'rootcause' => [
                'Untuk case di iOS apliksi tidak bisa dibuka setelah update.'
            ],
            'cwc' => ['Complaint - MyPertamina - Aplikasi tidak bisa dibuka setelah update di iOS'],
            'todolist' => [
                'Solusi sementara delete apps & install ulang'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('C/P2/index', $data);
    }
}
