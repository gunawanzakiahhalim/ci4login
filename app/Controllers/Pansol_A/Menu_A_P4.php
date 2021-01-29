<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P4 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Cara menjadi Mitra/Vendor Pertamina',
            'update' => '10:22 26/Oct/20',
            'rootcause' => [
                'Dealership & Cara menjadi Mitra',
                'Pelanggan ingin informasi detail prosedur menjadi mitra Pertamina yang tidak dijelaskan dalam source atau pelanggan sudah mendaftar via website https://kemitraan.pertamina.com/, namun menginginkan informasi detail langkah selanjutnya dalam pendaftaran mitra Pertamina.'
            ],
            'cwc' => ['Information - Layanan BBK - Cara menjadi Mitra/Vendor Pertamina'],
            'todolist' => [
                'Datang ke Kantor Pertamina Terdekat',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P4/index', $data);
    }
}
