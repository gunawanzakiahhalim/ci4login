<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P12 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Harga BBM di SPBU belum Update',
            'update' => '14:22 16/Oct/20',
            'rootcause' => [
                'Jika pelanggan mengeluhkan daftar harga yang ditampilkan SPBU belum diperbaharui.'
            ],
            'cwc' => ['Complaint - Layanan BBM - Harga BBM di SPBU belum Update'],
            'fcr' => [
                'Agent 135 langsung menghubungi Manager SPBU, setelah ada evidence perbaikan case closed, konsumen diinfokan',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Agent tanyakan lokasi, jenis produk BBM dan harga yang di display.' => ['-'],
                'Agent mengecek harga pada website pertamina.com' => [
                    'Jika harga yang di display dengan website sama, agent sampaikan bahwa harga tersebut sudah yang update (FCR). Namun, ketika percakapan berkembang dan harga yang ditagihkan oleh SPBU lebih tinggi dari harga yang seharusnya, agent mengacu ke pansol "kenaikan harga BBM".',
                    'Jika harga yang di display dengan website berbeda, agent bantu create tiket'
                ],
                'Infokan SLA' => ['-']

            ],
            'mandatory' => [
                'Tanyakan nama pelapor.',
                'Tanyakan tanggal dan waktu kejadian.',
                'Nomor SPBU ( Tanpa Titik ) atau Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                '**Lokasi SPBU wajib ditanyakan walaupun pelanggan mengetahui nomor SPBUnya. Namun, jika pelanggan tidak mengetahui nomor SPBU, agent bisa tetap eskalasi dengan hanya mencantumkan lokasi dan patokan SPBU.',
                'Tanyakan Detail permasalahan (jenis produk, harga yang ditampilkan dan harga yang seharusnya sesuai website)',
                'Tanyakan nama petugas SPBU (Jika pelanggan tidak mengetahui, tanyakan jenis kelamin petugas)',
                'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];

        return view('A/P12/index', $data);
    }
}
