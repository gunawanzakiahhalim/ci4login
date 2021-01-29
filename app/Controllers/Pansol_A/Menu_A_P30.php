<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P30 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kualitas atau Standar Struk',
            'update' => '14:00 23/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan mengenai kualitas struk misalnya dari setiap SPBU apakah ada standarisasi struk BBM, ukuran kertas, jenis kertas, berat kertas, cap SPBU, dan lain-lain.'
            ],
            'cwc' => ['Complaint - Layanan BBK - Kualitas atau Standar Struk'],
            'fcr' => [
                'Edukasi diberikan opsi untuk struk manual, jika masih dilokasi.',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Apabila pelanggan meminta struk, namun printer sedang berkendala maka petugas wajib memberikan struk manual.',
                'Terkait keluhan kualitas struk pembelian > sampaikan stanjab "mohon maaf sekali atas ketidaknyamanan yang dialami. Setiap SPBU memang memiliki jenis struk yang berbeda-beda, namun validitas struk manual dapat dinilai dari cap SPBU. Terkait dengan keluhan Bapak/Ibu, kami bantu sampaikan sebagai saran agar pelayanan optimal dalam hal ini yang berkaitan dengan standarisasi struk di setiap SPBU. Untuk informasi tambahan, saat ini pembelian BBM dapat menggunakan aplikasi MyPertamina untuk mempermudah pembayaran"'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P30/index', $data);
    }
}
