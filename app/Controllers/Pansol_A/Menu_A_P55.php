<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P55 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Petugas Tidak Ramah',
            'update' => '14:06 22/Oct/20',
            'rootcause' => [
                'Permasalahan terkait dengan sikap dan proses layanan petugas SPBU yang tidak sesuai dengan SOP.',
                'Pelanggan mengeluhkan bahwa Petugas tidak ramah.'
            ],
            'contoh' => [
                'Petugas menggunakan nada tinggi.'
            ],
            'cwc' => ['Complaint - Layanan BBK - Petugas Tidak Ramah'],
            'todolist' => [
                'Nama Pelapor',
                'Tanggal dan Waktu Kejadian',
                'Nomor SPBU (Tanpa Titik)',
                'Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Nama Petugas SPBU. Jika pelanggan tidak mengetahui nama petugas SPBU, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                'Detail Permasalahan',
                'Nomor yang bisa dihubungi',
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
        return view('A/P55/index', $data);
    }
}
