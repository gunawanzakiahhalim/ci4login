<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P24 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kenaikan Harga BBM',
            'update' => '11:07 19/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan terjadinya kenaikan harga tidak wajar terhadap produk BBM di SPBU atau lingkup yang lebih luas.'
            ],
            'rekomendasi' => [
                'Rekomendasi :' => [
                    'Agent pastikan kenaikan harga yang dibandingkan pelanggan, Contoh SPBU A dan SPBU B harus ada pembandingnya.',
                    'Cek harga di web https://www.pertaminafuels.com/harga-dan-lokasi berdasarkan provinsi, apakah ada perbedaan atau tidak?'
                ]
            ],
            'cwc' => ['Complaint - Layanan BBK - Kenaikan Harga BBM'],
            'fcr' => [
                'Informasi Harga Seharusnya dari Agent 135 ke konsumen based on publikasi harga Pertamina, sesuai kebijakan Pertamina/Pemerintah',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Tanyakan nama pelapor.' => ['-'],
                'Tanyakan SPBU sekitar apakah mengalami kenaikan atau tidak' => [
                    'Jika belum, Sarankan pelanggan untuk mencoba ke SPBU lainnya (FCR)',
                    'Jika sudah dan SPBU lain mengalami hal yang sama (kenaikan harga BBM) atau dalam lingkup yang lebih luas maka agent lanjut ke poin berikutnya :'
                ]
            ],
            'poin' => [
                'Tanyakan tanggal dan waktu kejadian.',
                'Tanyakan Nomor SPBU, jika tidak mengetahui tanyakan lokasi seperti jalan dan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.',
                'Tanyakan produk yang mengalami kenaikan harga tidak wajar (perbandingan dengan harga sebelumnya)',
                'Tanyakan nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Jenis BBM :',
                'Harga Sebelumnya :',
                'Harga Sekarang :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P24/index', $data);
    }
}
