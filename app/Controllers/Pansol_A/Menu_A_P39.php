<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P39 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Mendahulukan Pengisian Jeriken',
            'update' => '14:08 21/Oct/20',
            'rootcause' => [
                'Operator SPBU melayani pembelian BBM, dimana calon pembeli tersebut tidak mengikuti antrian (menorobos antrian) dan pembelian menggunakan jeriken maka termasuk mendahulukan pengisian jeriken.'
            ],
            'cwc' => ['Complaint - Layanan BBK - Mendahulukan Pengisian Jeriken'],
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
        return view('A/P39/index', $data);
    }
}
