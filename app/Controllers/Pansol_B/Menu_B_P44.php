<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P44 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Mendahulukan Pembayaran Pada Kenalan',
            'update' => '9:37 27/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan petugas mendahulukan pembayaran pada kenalan'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Mendahulukan pembayaran pada kenalan'],
            'todolist' => [
                'Tanyakan nama pelapor',
                'Tanyakan tanggal dan waktu kejadian',
                'Tanyakan nama agen',
                'Tanyakan Lokasi agen (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Tanyakan Nama Petugas (jika tidak mengetahui tanyakan ciri-cirinya, seperti: Jenis Kelamin, Ciri Khusus dll)',
                'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Lokasi Kejadian : (Pastikan Kecamatan, dan Kota Jelas)',
                'Nama Agen/Nama Pangkalan : (Opsional namun tetap tanyakan)',
                'Nama Petugas : (Pria/Wanita)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P44/index', $data);
    }
}
