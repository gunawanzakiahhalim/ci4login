<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P38 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Menanyakan Penurunan status SPBU Pasti Pas',
            'update' => '14:01 21/Oct/20',
            'rootcause' => [
                'rootcause',
                'rootcause',
                'rootcause'
            ],
            'cwc' => ['Complaint - Layanan BBK - Menanyakan Penurunan status SPBU Pasti Pas'],
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
            'sla' => '3x24 Jam'
        ];
        return view('A/P38/index', $data);
    }
}
