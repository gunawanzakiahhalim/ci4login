<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P6 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Dealership/ Stok LPG',
            'update' => '9:24 27/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan keagenan dan Stok LPG, misalnya keterlambatan pengiriman stock, kurang jumlah, dll.'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Dealership/ Stok LPG'],
            'fcr' => [
                'Dijawab oleh Agent 135 bahwa pendaftaran agen LPG dilakukan melalui website https://kemitraan.pertamina.com/',
                'Untuk pendaftaran pangkalan, Agent 135 menginformasikan daftar agen setempat',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Tanyakan nama pelapor',
                'tanyakan tanggal dan waktu kejadian',
                'Tanyakan nama agen',
                'Alamat atau Lokasi Agen (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian alamat agen oleh 2nd Tier.)',
                'Tanyakan Jenis LPG yang dibeli dan detail permasalahan',
                'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nama Agen/Pangkalan : (Opsional namun tetap tanyakan)',
                'Alamat Agen/Pangkalan : (Opsional namun tetap tanyakan)',
                'Jenis dan Ukuran LPG : (Bright Gas/Elpiji)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P6/index', $data);
    }
}
