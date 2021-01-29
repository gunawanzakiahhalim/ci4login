<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P28 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Penipuan MyPertamina',
            'update' => '14:21 30/Oct/20',
            'rootcause' => [
                'MyPertamina Penipuan'
            ],
            'cwc' => ['Complaint - MyPertamina - Penipuan'],
            'todolist' => [
                'todolist',
                'todolist',
                'todolist'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Detail Permasalahan :',
                'CP :'
            ],
            'sla' => 'Jam'
        ];
        return view('C/P28/index', $data);
    }
}
