<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P66 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Tagihan Tidak Sesuai Mesin Pengisian',
            'update' => '8:46 26/Oct/20',
            'rootcause' => [
                'Terkait Tagihan tidak sesuai'
            ],
            'contoh' => [
                'di dispenser tertera harga 49.700 sedangkan petugas menagih ke pelanggan 50.000'
            ],
            'cwc' => ['Complaint - Layanan BBK - Tagihan Tidak Sesuai Mesin Pengisian'],
            'todolist' => [
                'Tanyakan Nama Pelapor',
                'Tanyakan Tanggal dan Waktu Kejadian',
                'Nomor SPBU (Tanpa Titik)',
                'Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Tanyakan Detail permasalahan (serta jenis bbm, nominal pembelian, tagihan pembelian )',
                'Tanyakan Nama Petugas SPBU. Jika pelanggan tidak mengetahui nama petugas SPBU, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                'Ifokan SLA'
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
        return view('A/P66/index', $data);
    }
}
