<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P21 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Keluhan Mobil Tangki LPG',
            'update' => '9:40 27/Oct/20',
            'rootcause' => [
                'Terkait ada nya keluhan masyarakat terhadap kendaraan yang mendistribusikan LPG,',
                'seperti kecepatan mobil diatas batas aman, adanya kecelakan lalu lintas dikarenakan kelalaian pengemudi mobil LPG, terganggu oleh aktivitas bongkar muat tangki LPG'
            ],
            'contoh' => [
                'Truck tanggki LPG Ugal-ugalan dengan kecepatan 100 Kpj',
                'Warga komplek perumahan terganggu dengan proses bongkar muat LPG karena posisi mobil menutup akses keluar masuk komplek'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Keluhan Mobil Tangki LPG'],
            'todolist' => [
                'Jika Mobil pengangkut Tangki LPG' => [
                    'Tanyakan nama pelapor',
                    'Tanyakan tanggal dan waktu kejadian',
                    'Tanyakan nama agent yang tertera pada kendaraan',
                    'Jenis tabung LPG yang diangkut (Non Subsidi/ Subsidi)',
                    'Tanyakan Lokasi kejadian',
                    'Tanyakan Jenis kendaraan yang digunakan dan tanyakan Nomor polisi',
                    'Tanyakan permasalahan pelanggan',
                    'Tanyakan nomor yang bisa dihubungi',
                    'Infokan SLA'
                ],
                'Jika Truck LPG Bulk' => [
                    'Tanyakan nama pelapor',
                    'Tanyakan tanggal dan waktu kejadian',
                    'Tanyakan Lokasi kejadian',
                    'Tanyakan Jenis kendaraan yang digunakan dan tanyakan Nomor polisi',
                    'Tanyakan permasalahan pelanggan',
                    'Tanyakan nomor yang bisa dihubungi',
                    'Infokan SLA'
                ]
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Lokasi Kejadian : (Pastikan Nama Jalan, dan Kota Jelas)',
                'Jenis Kendaraan :',
                'Nomor Polisi : (WAJIB)',
                'Detail Permasalahan : (Kronologi)',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P21/index', $data);
    }
}
