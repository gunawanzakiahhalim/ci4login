<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P68 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Uang Kembalian',
            'update' => '9:10 26/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan ada ketidasesuaian pengembalian uang dari perhitungan uang yang dibayarkan dengan total pembelian'
            ],
            'cwc' => ['Complaint - Layanan BBK - Uang Kembalian'],
            'fcr' => [
                'Pelanggan diedukasi untuk kembali ke SPBU untuk meminta kembali kembalian dan agent 135 menghubungi manager SPBU',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Tanyakan Nama Pelapor',
                'Tanyakan Tanggal dan Waktu Kejadian',
                'Nomor SPBU (Tanpa Titik)',
                'Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Tanyakan Detail permasalahan',
                'Tanyakan Nama Petugas SPBU. Jika pelanggan tidak mengetahui nama petugas SPBU, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
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
        return view('A/P68/index', $data);
    }
}
