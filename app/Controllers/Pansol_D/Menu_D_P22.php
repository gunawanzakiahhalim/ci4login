<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P22 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kendala2x EDC SPBU Digital Pertamina',
            'update' => '15:34 30/Oct/20',
            'rootcause' => [
                'Informasi mengenai : Kendala2x EDC SPBU Digital Pertamina :'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Network tidak stabil',
                'krn versi POT lama (dibawah ver 2.5.1) tidak mendapatkan feedback dari switching (my pertamina)',
                'apabila ada kejadian QR link aja keluar, namun my pertamina tidak keluar yg harus dilakukan adalah cek versi POT apakah sudah ver 2.5.1 atau belum.'
            ],
            'edc' => [
                'identifikasi penyebab gagal print :' => [
                    'operator melakukan back QR code sebelum print edc berhasil.',
                    'jaringan tdk stabil saat transaksi sukses.',
                    'operator tidak mengecek last payment saat tidak berhasil print struk.',
                    'pengecekan settlement tdk ada dikarenakan masih dalam proses singkronisasi',
                    'kurangnya edukasi ke customer'
                ],
                'solusi :' => [
                    'utk transaksi yg gagal print step yg hrs dilakukan adalah pilih dan cek menu last payment.',
                    'check web merchant',
                    'cek notif email akun yg terdaftar utk menerima notif',
                    'apps web merchant menggunakan smart phone - memberikan edukasi kepada operator oleh Pertamina dan Telkom Akses. (ketika integrasi)'
                ]
            ],
            'mid' => [
                'double mid sudah tdk ada per data release 8 januari 2020.',
                'utk kode spbu yg terdapat kode tambahan akan diklarifikasi lagi utk memastikan mid mana yg akan digunakan',
                'akan dikirimkan data mid terbaru tanpa duplikat kode spbu pd tgl 3 februari 2020.',
                'nama spbu yg tdk terdapat kode spbu akan dikirimkan data kembali oleh finarya.'
            ],
            'mekanisme' => [
                'EDC sudah digitalisasi (sudah integrasi)' => [
                    'Jaringan digitalisasi harus meng-allow server OTA (on the air)',
                    'kondisi EDC harus terdeteksi online di server OTA dgn jaringan yg stabil'
                ],
                'EDC standalone' => [
                    'terdapat akses internet pd EDC',
                    'kondisi EDC harus terdeteksi online di server OTA dgn jaringan yg stabil.'
                ]
            ],
            'harga' => [
                'sudah digitalisasi' => [
                    'harus on site ke lokasi utk melakukan upgrade p insyst'
                ],
                'standalone' => [
                    'dilakukan update via aplikasi my pertamina - backend'
                ]
            ],
            'note' => [
                'Untuk permintaan (register edc link aja) silakan bisa kontak langsung Contact Center PINS : 08115600222.'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P22/index', $data);
    }
}
