<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P1 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Aplikasi MyPertamina tidak dapat diakses',
            'update' => '10:26 27/Nov/20',
            'rootcause' => [
                'Pelanggan mengeluhkan tidak dapat akses aplikasi MyPertamina, misalnya loading, menu tidak dapat diklik, tiba-tiba poin hilang/tidak muncul, aplikasi blank, dan lain sebagainya.'
            ],
            'cwc' => ['Complaint - MyPertamina - Aplikasi MyPertamina tidak dapat diakses'],
            'todolist' => [
                'Tanyakan apakah kendala hanya pada aplikasi MyPertamina atau pada aplikasi lain juga? (untuk memastikan jaringan stabil)',
                'Jika keluhan blank, lag, poin tidak muncul atau tiba - tiba hilang ( Kendala Aplikasi ) , arahkan pelanggan update versi terbaru Aplikasi MyPertamina dan pastikan sudah menggunakan perangkat yang compatible (android minimal OS 6.0, Iphone minimal IOS 11).',
                'Clear cache Aplikasi dan resart hp',
                'Pastikan untuk yang dimaksud poin dan bukan kupon',
                'Jika Masih berkendala Lampirkan capture bukti kendalanya dan kirimkan ke pcc135@pertamina.com , lalu Agent create ticket. Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor Tedaftar MyPertamina dan LinkAja :',
                'Tipe Handphone :',
                'OS Handphone :',
                'Keterangan Gagal :',
                'Detail Permasalahan :',
                'CP :',
                'Screenshot kirim ke pcc135@pertamina.com, menggunakan Email :'
            ],
            'sosmed' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor Terdaftar MyPertamina dan LinkAja :',
                'Tipe Handphone :',
                'OS Handphone :',
                'Detail Permasalahan :',
                'Email :',
                'CP :',
                'Infokan screenshot kendala :',
                'Nama akun pelanggan :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('C/P1/index', $data);
    }
}
