<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P8 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Case Semua Dispenser tidak bisa reset nol',
            'update' => '15:44 30/Oct/20',
            'rootcause' => [
                'Case semua Dispenser tidak bisa reset nol'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Solusi : restart PC nya'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P8/index', $data);
    }
}
