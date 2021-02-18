<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P65 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Syarat dan Ketentuan RFID',
            'update' => '17:12 18/Feb/21',
            'rootcause' => [
                'Cara menggunakan/ mendapatkan kartu RFID'
            ],
            'cwc' => ['Information - Layanan BBK - Syarat dan Ketentuan RFID'],
            'todolist' => [
                'Pelanggan datang Ke SPBU COCO dan Menyerahkan Pertamina Retail Card kepada petugas',
                'Petugas akan melakukan tapping Kartu PAS ke RFID Card Reader, dan memastikan nama pemilik dan saldo masih tersedia pada layar reader',
                'Pelanggan memilih produk BBM/BBK',
                'Petugas melakukan pengisian sesuai dengan permintaan pelanggan',
                'Ticket Printer secara otomatis mencetak 2 berkas struk yang harus ditandatangani oleh petugas dan pemilik Pertamina Retail Card'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P65/index', $data);
    }
}
