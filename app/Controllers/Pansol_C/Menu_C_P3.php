<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P3 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Cara Daftar Program BEP',
            'update' => '13:36 30/Oct/20',
            'rootcause' => [
                'Pelanggan menanyakan informasi yang berkaitan dengan pengumuman undian BEP.'
            ],
            'cwc' => ['Information - MyPertamina - Cara Daftar Program BEP'],
            'todolist' => [
                'Agent informasikan sesuai source resmi > FCR.'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'FCR'
        ];
        return view('C/P3/index', $data);
    }
}
