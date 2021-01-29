<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P47 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Pengisian BBM Luber',
            'update' => '9:17 22/Oct/20',
            'rootcause' => [
                'Permasalahan terkait dengan sikap dan proses layanan petugas SPBU yang tidak sesuai dengan SOP',
                'Pelanggan mengeluhkan bahwa Petugas melakukan Pengisian hingga BBM Luber.'
            ],
            'cwc' => ['Complaint - Layanan BBK - Pengisian BBM Luber'],
            'todolist' => [
                'Tanyakan Nama Pelapor.',
                'Tanyakan Tanggal dan Waktu Kejadian',
                'Tanyakan Nomor SPBU (Tanpa Titik)',
                'Tanyakan Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Tanyakan Nama Petugas SPBU. Jika pelanggan tidak mengetahui nama petugas SPBU, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                'Tanyakan Detail permasalahan',
                'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Nama Petugas SPBU : (Pria/Wanita)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P47/index', $data);
    }
}
