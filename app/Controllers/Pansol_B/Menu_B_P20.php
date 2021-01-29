<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P20 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Keluhan kualitas LPG di SPBU/Bright store',
            'update' => '9:51 27/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan akan kualitas LPG (Elpiji/Bright Gas), seperti tabung berkarat, tabung penyok, cat sudah pudar dan tidak jelas, api yang dihasilkan tidak biru'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Keluhan kualitas LPG di SPBU/Bright store'],
            'todolist' => [
                'Tanyakan nama pelapor',
                'Tanyakan tanggal dan waktu kejadian',
                'Tanyakan nama agen yang terdapat di dalam SPBU',
                'Nomor SPBU ( Tanpa Titik ) atau Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Tanyakan Jenis LPG yang dibeli',
                'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Jenis dan Ukuran LPG : (Bright Gas/Elpiji)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P20/index', $data);
    }
}
