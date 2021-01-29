<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P58 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Produk yang diterima tidak sesuai',
            'update' => '13:51 23/Oct/20',
            'rootcause' => [
                'Permasalahan terkait dengan sikap dan proses layanan petugas SPBU yang tidak sesuai dengan SOP.',
                'Pelanggan mengeluhkan bahwa Petugas salah memasukkan jenis BBM ke dalam kendaraan pelanggan.'
            ],
            'cwc' => ['Complaint - Layanan BBK - Produk yang diterima tidak sesuai'],
            'todolist' => [
                'Nama Pelapor',
                'Tanggal dan Waktu Kejadian',
                'Nomor SPBU (Tanpa Titik)',
                'Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Nama Petugas SPBU. Jika pelanggan tidak mengetahui nama petugas SPBU, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                'Jenis BBM yg di isi dan yang seharusnya di isi',
                'Jenis Kendaraan',
                'Detail Permasalahan',
                'Nomor yang bisa dihubungi',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Jenis BBM yang diisikan :',
                'Jenis BBM yang seharusnya diisikan :',
                'Jenis Kendaraan :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P58/index', $data);
    }
}
