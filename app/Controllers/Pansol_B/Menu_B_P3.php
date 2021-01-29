<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P3 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Belum mendapatkan Paket konversi',
            'update' => '13:37 27/Oct/20',
            'rootcause' => [
                'Terkait Belum mendapatkan Paket konversi'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Belum mendapatkan Paket konversi'],
            'todolist' => [
                'Agent 135 menyampaikan bahwa untuk program konversi merupakan penugasan Pemerintah dan Pertamina menjalankan sesuai penugasan Pemerintah.',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P3/index', $data);
    }
}
