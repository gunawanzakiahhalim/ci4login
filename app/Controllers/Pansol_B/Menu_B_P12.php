<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P12 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Indikasi Kecurangan LPG',
            'update' => '8:38 27/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan tentang penimbunan, indikasi kecurangan di beberapa pangkalan dsb.'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Indikasi Kecurangan LPG'],
            'fcr' => [
                'Agent 135 menyampaikan terima kasih atas masukannya dan akan menyampaikan ke Management Pertamina.',
                'Agent 135 meminta info lebih detail tentang kejadiannya : tanggal,waktu, lokasi, pihak yang terlibat, dan deskripsi kejadian',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Tanyakan nama pelapor',
                'Tanyakan tanggal dan waktu kejadian',
                'Tanyakan nama agen dan lokasi dimana terjadinya penimbunan, kecurangan dsb (lokasi harus lengkap untuk memudahkan identifikasi)',
                'Tanyakan produk yang mengalami hasl tersebut',
                'Tanyakan nomor yang bisa dihubungi (kondisional).'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Lokasi Kejadian : (Pastikan Kecamatan, dan Kota Jelas)',
                'Nama Agen/Nama Pangkalan : (Opsional namun tetap tanyakan)',
                'Jenis dan Ukuran LPG : (Bright Gas/Elpiji)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P12/index', $data);
    }
}
