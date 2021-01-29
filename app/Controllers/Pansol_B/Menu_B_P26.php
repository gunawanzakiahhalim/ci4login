<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P26 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kenaikan Harga Domgas',
            'update' => '13:26 27/Oct/20',
            'rootcause' => [
                'Terkait Kenaikan Harga Domgas'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Kenaikan Harga Domgas'],
            'todolist' => [
                'Informasi Harga Seharusnya dari Agent 135 ke konsumen based on publikasi harga Pertamina, sesuai kebijakan Pertamina/Pemerintah Daerah (HET) dan berlaku di outlet resmi Pertamina',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P26/index', $data);
    }
}
