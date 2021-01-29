<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P36 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Tidak bisa menggunakan layanan LinkAja',
            'update' => '11:34 30/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan kendala tidak bisa menggunakan layanan LinkAja dengan keterangan tidak bisa aktivasi, tidak bisa terhubung, dan lain-lain.'
            ],
            'cwc' => ['Information - MyPertamina - Tidak bisa menggunakan layanan LinkAja'],
            'todolist' => [
                'Jika tidak bisa aktivasi LinkAja' => [
                    'Pandu Pelanggan sesuai tata cara aktivasi mengacu pada pansol "tahapan aktivasi LinkAja" atau source "FAQ MyPertamina (Edit)" > (FCR)',
                    'Jika masih berkendala capture keterangan gagal dan agent bantu create ticket dengan mengisi mandatory lengkap.',
                    'Infokan SLA'
                ],
                'Jika LinkAja tidak connect dengan MyPertamina' => [
                    'Lakukan Pengecekan Check code OTP (message) yg diperoleh setelah melakukan aktivasi LinkAja dan dipastikan password LinkAja benar',
                    'Jika setelah semua langkah2 diatas masih berkendala, capture kendalanya dan bantu create ticket dengan mengisi mandatory lengkap.',
                    'Infokan SLA'
                ]
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
                'Nomor Tedaftar MyPertamina dan LinkAja :',
                'Tipe Handphone :',
                'OS Handphone :',
                'Keterangan Gagal :',
                'Detail Permasalahan :',
                'CP :',
                'Screenshot kirim ke pcc135@pertamina.com, menggunakan Email :'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('C/P36/index', $data);
    }
}
