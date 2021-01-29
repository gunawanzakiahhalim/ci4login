<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P43 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Pembatasan Pembelian BBM Subsidi',
            'update' => '16:51 21/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan adanya pembatasan untuk pembelian BBM (Subsidi).' => [
                    '-'
                ],
                'Tanyakan jenis BBM-nya, Subsidi atau Non Subsidi.' => [
                    'Jika BBM Subsidi, agent melakukan Edukasi ke pelangaan untuk membeli produk lain yang masih tersedia.',
                    'Jika Non Subsidi, Cek Standar Jawaban.'
                ]
            ],
            'info' => [
                'Jika ada standar Jawaban maka Agent harus langsung sampaikan ke pelanggan sesuai dengan standar jawaban, status nya (FCR)',
                'Jika tidak ada lakukan identifikasi lebih lanjut'
            ],
            'cwc' => ['Complaint - Layanan BBK - Pembatasan Pembelian BBM Subsidi'],
            'fcr' => [
                'Solusi FCR (Kalau Konsumen Puas Closed)',
                'Apabila terkait Premium dan Solar Subsidi diberikan penjelasan ttg kebijakan pemerintah, dan diberikan solusi bbm non subsidi'
            ],
            'todolist' => [
                'Tanyakan Nama Pelapor.',
                'Tanyakan Tanggal dan Waktu Kejadian',
                'Tanyakan Nomor SPBU (Tanpa Titik)',
                'Tanyakan Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Tanyakan Nama Petugas SPBU. Jika pelanggan tidak mengetahui nama petugas SPBU, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                'Tanyakan Detail permasalahan perihal Pembatasan pembelian BBM, jika keterangan dari pihak SPBU "Stok BBM Kosong", tanyakan ke pelanggan bagaimana di SPBU lain? Jika di SPBU yang lain mengalami kendala sama, silakan mengacu ke sub kategori Kelangkaan.',
                'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA',
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
        return view('A/P43/index', $data);
    }
}
