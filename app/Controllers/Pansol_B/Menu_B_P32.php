<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P32 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Konversi LPG',
            'update' => '11:04 27/Oct/20',
            'rootcause' => [
                'Terkait Konversi LPG'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Konversi LPG'],
            'todolist' => [
                'Agent 135 menginformasikan roadmap / rencana program konversi di daerah tersebut',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P32/index', $data);
    }
}
