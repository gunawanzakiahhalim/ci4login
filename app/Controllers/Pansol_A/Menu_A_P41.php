<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P41 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Pelayanan Petugas SPBU',
            'update' => '14:18 21/Oct/20',
            'rootcause' => [
                'Permasalahan terkait dengan sikap dan proses layanan petugas SPBU yang tidak sesuai dengan SOP, seperti tidak ramah, tidak mengucapkan dimulai dari nol, tidak menyapa, bercanda, tidak sopan, pembatasan pembelian terhadap bahan bakar tertentu dikarenakan kebijakan SPBU setempat yg tidak menyebabkan antrian, dll'
            ],
            'contoh' => [
                'Jika Operator SPBU melayani pembelian BBM Non subsidi, dimana calon pembeli tersebut tidak mengikuti antrian (menorobos antrian), dan pelanggan menggunakan kendaraan pribadi (mobil atau motor standar). Maka termasuk "Pelayanan Petugas SPBU"'
            ],
            'cwc' => ['Complaint - Layanan BBK - Pelayanan Petugas SPBU'],
            'todolist' => [
                'Tanyakan Nama Pelapor.',
                'Tanyakan Tanggal dan Waktu Kejadian',
                'Tanyakan Nomor SPBU (Tanpa Titik)',
                'Tanyakan Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Tanyakan Nama Petugas SPBU. Jika pelanggan tidak mengetahui nama petugas SPBU, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                'Tanyakan Detail permasalahan',
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
        return view('A/P41/index', $data);
    }
}
