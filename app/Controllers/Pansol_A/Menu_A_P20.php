<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P20 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kelangkaan BBM',
            'update' => '9:33 19/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan terjadinya kelangkaan terhadap produk BBM di SPBU atau lingkup yang lebih luas.',
                'Agent harus melakukan pengecekan apakah produk yang dimaksud dijual di SPBU tersebut, jika tidak sarankan pelanggan ke SPBU lain yang menyediakan produk dimaksud pelanggan.'
            ],
            'cwc' => ['Complaint - Layanan BBM - Kelangkaan BBM'],
            'fcr' => [
                'Apabila kelangkaan tentang BBM subsidi, Agen 135 minta maaf dan memberikan penjelasan ke Konsumen dan mengarahkan ke Non Subsidi atau SPBU terdekat',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Tanyakan nama pelapor.' => ['-'],
                'Tanyakan SPBU sekitar apakah mengalami kelangkaan atau tidak' => [
                    'Jika belum, Sarankan pelanggan untuk mencoba ke SPBU lainnya (FCR)',
                    'Jika sudah dan SPBU lain mengalami hal yang sama (Kelangkaan BBM) atau dalam lingkup yang lebih luas maka agent agent create tiket dengan mengisi data mandatory lengkap.'
                ],
                'Pastikan pelanggan mengetahui lebih dari Satu nomor SPBU.' => ['-'],
                'Infokan SLA' => ['-'],
                'Ketika ada indikasi HK, maka lakukan mekanisme penanganan HK.' => ['-']
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan waktu kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Jenis BBM yang mengalami kelangkaan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P20/index', $data);
    }
}
