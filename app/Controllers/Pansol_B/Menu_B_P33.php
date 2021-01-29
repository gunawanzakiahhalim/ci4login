<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P33 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kualitas Karet Seal',
            'update' => '9:58 27/Oct/20',
            'rootcause' => [
                'pelanggan mengeluhkan kualitas karet seal setelah membeli tabung perdana/refill.'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Kualitas Karet Seal'],
            'todolist' => [
                'Tanyakan nama pelapor',
                'Tanyakan tanggal dan waktu pembelian',
                'Tanyakan lokasi pembelian',
                'Tanyakan jenis LPG yang dibeli',
                'Pastikan pembelian awal masih dalam kedaan tersegel',
                'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Channel Pembelian : (Nama Agen/Nama Pangkalan/Indomaret/Klontong, dll)',
                'Alamat Pembelian : (Opsional namun tetap tanyakan)',
                'Jenis dan Ukuran LPG : (Bright Gas/Elpiji)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P33/index', $data);
    }
}
