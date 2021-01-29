<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P18 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'MyPertamina Gagal Login',
            'update' => '10:38 30/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan kesulitan login aplikasi mypertamina.'
            ],
            'cwc' => ['Complaint - MyPertamina - MyPertamina Gagal Login'],
            'todolist' => [
                'Tanyakan keterangan gagal login',
                'Jika keterangan password pin salah, sarankan agar pilih menu lupa kata sandi, kemudian masukan akun nomernya dan tunggu sms pin baru. Jika pelanggan ingin ganti pin bisa masuk ke menu profile pilih ganti pin.',
                'Jika Keterangan nomer belum terdaftar, pastikan nomer sudah sesuai dan jika pelanggan belum mendaftar agar pilih menu daftar sekarang, namun jika nomer sudah sesuai agent creat ticket',
                'Pastikan apabila pelanggan mempunyai aplikasi VPN, sampaikan agar settingan VPN nya dalam keadaan OFF',
                'Jika semua langkah sudah dicoba agent bantu creat ticket'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor Tedaftar MyPertamina :',
                'No KTP :',
                'Tipe Handphone :',
                'OS Handphone :',
                'Email yang Terdaftar :',
                'Keterangan Gagal :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('C/P18/index', $data);
    }
}
