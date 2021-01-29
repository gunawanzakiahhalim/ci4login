<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P55 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Petugas LPG merokok di SPBU',
            'update' => '9:42 27/Oct/20',
            'rootcause' => [
                'Adanya keluahan pelanggan melihat petugas LPG merokok di dalam area SPBU'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Petugas LPG merokok di SPBU'],
            'todolist' => [
                'Tanyakan nama pelapor',
                'Tanyakan tanggal dan waktu kejadian',
                'Tanyakan nama agen yang terdapat di dalam SPBU',
                'Nomor SPBU ( Tanpa Titik ) atau Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Tanyakan Nama Petugas tersebut. Jika pelanggan tidak mengetahui nama petugas, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Nama Agen : (Opsional jika tertera namun tetap tanyakan)',
                'Nama Petugas : (Pria/Wanita)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P55/index', $data);
    }
}
