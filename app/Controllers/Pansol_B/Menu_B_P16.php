<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P16 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kelangkaan LPG',
            'update' => '9:38 27/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan terjadinya kelangkaan terhadap produk Domgas di Agen atau lingkup yang lebih luas'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Kelangkaan LPG'],
            'fcr' => [
                'Apabila kelangkaan tentang LPG subsidi, Agen 135 minta maaf dan memberikan penjelasan ke Konsumen dan mengarahkan ke Non Subsidi',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Tanyakan nama pelapor.',
                'Tanyakan tanggal dan waktu kejadian.',
                'Tanyakan nama agen LPG dan lokasi dimana terjadinya kelangkaan (termasuk nama jalan, RT RW, Kelurahan, Kecamatan, Kab/Kota).',
                'Tanyakan produk yang mengalami kelangkaan',
                'Tanyakan pelanggan sudah menbandingkan dengan pangkalan/agen lainnya',
                'Tanyakan nomor yang bisa dihubungi (kondisional)',
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
        return view('B/P16/index', $data);
    }
}
