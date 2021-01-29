<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P20 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'MyPertamina Kendala Mengubah Profile',
            'update' => '10:57 30/Oct/20',
            'rootcause' => [
                'Ketika pelanggan mengeluhkan tidak bisa update profile (mengisi alamat / data diri)'
            ],
            'cwc' => ['Complaint - MyPertamina - MyPertamina Kendala Mengubah Profile'],
            'todolist' => [
                'Berdasarkan Informasi di Google Play Store bahwa per tanggal 09.09.19 saat ini aplikasi MyPertamina sudah berada di versi 2.0.0.2 (sebaiknya selalu cek play store)',
                'Dari Hasil Trial untuk Versi MyPertamina 2.0.0.1 menu Edit Profil hanya bisa dilakukan di Android dengan OS minimal Versi 7.0 (Nougat) dan jika untuk Iphone sistem operasi yang Support MyPertamina adalah IOS 11.',
                'Sarankan Clear cache Aplikasi dan resart hp',
                'Jika Masih berkendala Tanyakan untuk profile mana yg tidak bisa diupdate ( Lampirkan capture kendalanya ), lalu agent Creat Tiket.'
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
                'Infokan Screenshot Kendala kirimkan ke email pcc135@pertamina.com',
                'Email yang digunakan :',
                'Subject Email yang dikirimkan :',
                'Infokan SLA'
            ],
            'sosmed' => [
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
                'Infokan screenshot kendala :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('C/P20/index', $data);
    }
}
