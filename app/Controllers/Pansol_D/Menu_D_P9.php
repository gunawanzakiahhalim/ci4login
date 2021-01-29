<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P9 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Case Settlement Shift',
            'update' => '15:47 30/Oct/20',
            'rootcause' => [
                'Case Settlement Shift'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Cara mengubah edc link aja dari aplikasi yang mode online ke aplikasi mode standalone POT ;' => [
                    'Bisa dilklik pojok kanan atas seperti digambar',
                    'Lalu pilih standalone lalu oke',
                    'Dan pastikan koneksi dilokasi M2M ←--- cara untuk mode standealone dan untuk ke sini masuk dulu ke aplikasi yang bernama POT (PInsyst Outdoor Terminal) dan masuk kepengaturan lalu.'
                ]
            ],
            'gambar' => 'settlement.jpg',
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P9/index', $data);
    }
}
