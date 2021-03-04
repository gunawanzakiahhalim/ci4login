<?php

namespace App\Controllers\Pansol_H;

use App\Controllers\BaseController;

class Menu_H_P1 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_H);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Mendahulukan Pengisian Jeriken',
            'update' => '9:04 04/Mar/21',
            'rootcause' => [
                'Operator SPBU melayani pembelian BBM, dimana calon pembeli tersebut tidak mengikuti antrian (menorobos antrian) dan pembelian menggunakan jeriken maka termasuk mendahulukan pengisian jeriken.'
            ],
            'cwc' => ['Keluhan - SPBU & Fuel Product - Antrian Pengisian BBM di SPBU - Mendahulukan Pengisian Jeriken'],
            'todolist' => [
                'Nama Pelapor',
                'Tanggal dan Waktu Kejadian',
                'Nomor SPBU Tanpa Titik)',
                'Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Nama Petugas SPBU. Jika pelanggan tidak mengetahui nama petugas SPBU, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                'Detail Permasalahan',
                'Nomor yang bisa dihubungi',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor',
                'Tanggal dan Waktu Kejadian',
                'Nomor SPBU ( Tanpa Titik )',
                'Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Nama Petugas SPBU. Jika pelanggan tidak mengetahui nama petugas SPBU, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                'Detail Permasalahan',
                'Nomor yang bisa dihubungi',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('H/P1/index', $data);
    }
}
