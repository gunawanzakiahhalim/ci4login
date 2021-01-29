<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P29 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Knowledge Petugas SPBU',
            'update' => '13:38 21/Oct/20',
            'rootcause' => [
                'Permasalahan terkait petugas SPBU yang tidak mengetahui seputar produk yang ada di SPBU (BBM, Bright Gas, Lubricant, Metode Pembayaran)'
            ],
            'contoh' => [
                'Pelanggan mengeluhkan tidak bisa melakukan pembayaran menggunakan aplikasi Mypertamina / LinkAja.',
                'Pelanggan mengeluhkan Petugas tidak mengetahui Promo terbaru.'
            ],
            'cwc' => ['Complaint - Layanan BBK - Knowledge Petugas SPBU'],
            'todolist' => [
                'Tanyakan Nama Pelapor',
                'Tanyakan Tanggal dan Waktu Kejadian',
                'Nomor SPBU (Tanpa Titik)',
                'Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Tanyakan jenis Permasalahan',
                'Tanyakan Nama Petugas SPBU. Jika pelanggan tidak mengetahui nama petugas SPBU, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
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
        return view('A/P29/index', $data);
    }
}
