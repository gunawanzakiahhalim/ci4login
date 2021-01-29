<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P17 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Keluhan Bright Gas dan EASE Gas',
            'update' => '10:32 27/Oct/20',
            'rootcause' => [
                'Terkait Keluhan Bright Gas dan EASE Gas'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Keluhan Keluhan Bright Gas dan EASE Gas'],
            'todolist' => [
                'Apabila mengenai takaran LPG,',
                'Diinformasikan ke Konsumen cara mengukur berat LPG yang benar,',
                'Informasi penangangan sesuai konteks pertanyaan',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P17/index', $data);
    }
}
