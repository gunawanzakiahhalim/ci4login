<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P23 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Keluhan Mobil Tangki (MT) Pertamina',
            'update' => '11:08 26/Oct/20',
            'rootcause' => [
                'Penyalahgunaan mobil tangki pertamina, mobil tangki pertamina ugal-ugalan, mobil pertamina menyenggol atau menabrak mobil pelanggan.'
            ],
            'cwc' => ['Complaint - Layanan BBK - Keluhan Mobil Tangki (MT) Pertamina'],
            'todolist' => [
                'Tanyakan nama pelapor',
                'Tanggal dan waktu kejadian',
                'Lokasi kejadian',
                '- Tanyakan nama jalan, kecamatan, kelurahan, nama kota atau kabupaten sedetail mungkin',
                'Tanyakan Nomor polisi truk tangki tersebut(WAJIB)',
                'Warna Mobil Tangki :',
                '- Tanyakan warna mobil tangki yang saat itu beroperasi Merah atau Biru',
                'Jenis Mobil Tangki :',
                '- Tanyakan jenis mobil tangki yang saat itu beroperasi mengangkut muatan LPG atau BBM',
                'Kapasitas Mobil Tangki : optional namun tanyakan',
                '- Tanyakan kapasitas Mobil Tangki yang saat itu beroperasi',
                'Nomor Armada : optional namun tanyakan',
                '- Tanyakan nomor armada yang berada di belakang mobil tangkio yang saat itu beroperasi',
                'Tanyakan detail permasalahan pelanggan yang terjadi saat itu.',
                'Tanyakan no yang bisa di hubungi.'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Lokasi Kejadian :',
                'Nomor Polisi Kendaraan :',
                'Warna MT : (Merah/Biru)',
                'Jenis MT : (BBM/LPG)',
                'Kapasitas MT : (opsional namun tanyakan)',
                'Nomor Armada : (opsional namun tanyakan)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P23/index', $data);
    }
}
