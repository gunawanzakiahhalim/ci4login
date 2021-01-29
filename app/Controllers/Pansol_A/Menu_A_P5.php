<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P5 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Card RFID tidak bisa digunakan untuk pembayaran di SPBU COCO',
            'update' => '10:30 16/Oct/20',
            'rootcause' => [
                'List SPBU yang dapat menggunakan card RFID sama dengan List SPBU COCO sehingga jika pelanggan mengeluhkan card RFID tidak bisa digunakan transaksi di spbu DODO / CODO maka edukasi pelanggan. Dan bila di SPBU COCO bisa dibantu create tiket.'
            ],
            'cwc' => ['Complaint - Layanan BBM - Card RFID tidak bisa digunakan untuk pembayaran di SPBU COCO'],
            'fcr' => [
                'Agent 135 memberikan solusi daftar SPBU COCO terdekat yang bisa pakai RFID',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Tanyakan SPBU yang tidak bisa menggunakan card RFID',
                'Jika pelanggan mengeluhkan card RFID tidak bisa digunakan transaksi di SPBU DODO / CODO maka solusi FCR > edukasi pelanggan bahwa card RFID hanya dapat digunakan di SPBU COCO, agent berikan informasi SPBU COCO terdekat dari lokasi pelanggan.',
                'Jika pelanggan mengeluhkan card RFID tidak bisa digunakan transaksi di SPBU COCO, maka agent eskalasi dengan mengisi data lengkap sesuai mandatory.',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'No Kartu RFID :',
                'Alamat email yang aktif :',
                'CP :',
                'Alamat email Perusahaan dan PIC :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];

        return view('A/P5/index', $data);
    }
}
