<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P10 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Dugaan Lokasi Oplos LPG',
            'update' => '10:27 27/Oct/20',
            'rootcause' => [
                'Terkait Dugaan Lokasi Oplos LPG'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Dugaan Lokasi Oplos LPG'],
            'todolist' => [
                'Dilakukan investigasi oleh SBM',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P10/index', $data);
    }
}
