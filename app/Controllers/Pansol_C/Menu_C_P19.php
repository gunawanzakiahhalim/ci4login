<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P19 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'MyPertamina Keluhan Tukar Point',
            'update' => '10:05 30/Oct/20',
            'rootcause' => [
                'Pelanggan tidak bisa tukar poin dengan voucher atau merchandise dengan keterangan habis, gagal, dan lain sebagainya.'
            ],
            'cwc' => ['Complaint - MyPertamina - MyPertamina Keluhan Tukar Point'],
            'todolist' => [
                'Tanyakan waktu kejadian' => ['-'],
                'Tanyakan jumlah poin dan produk loyalty yang ingin ditukar (voucher/merchandise) > agentcek SnK dan pastikan poin pelanggan mencukupi.' => ['-'],
                'Pastikan syarat dan ketentuan terpenuhi secara keseluruhan, misalnya terdapat ketentuan limit penukaran hanya 1 kali berarti agent pastikan apakah sebelumnya pelanggan belum pernah menukarkan poin.' => ['-'],
                'Tanyakan apakah poin sudah terpotong atau belum' => [
                    'Jika poin terpotong namun voucher belum didapatkan > agent mengacu pada pansol "Poin sudah berkurang voucher belum didapatkan"',
                    'Jika poin tidak terpotong, pelanggan memenuhi pesyaratan untuk menukarkan poin > agent create tiket dengan mengisi data lengkap sesuai mandatory. Infokan SLA'
                ]
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Penukaran :',
                'Nomor Terdaftar MyPertamina dan LinkAja :',
                'Jenis Merchandise :',
                'Jumlah Poin Sebelum Terpotong :',
                'Jumlah Poin Setelah Terpotong :',
                'Notifikasi Berhasil : (Berhasil/Tidak Berhasil)',
                'Alamat Pengiriman :',
                'Detail Permasalahan :',
                'Email :',
                'CP :',
                'Infokan Screenshot Penukaran dikirim ke email pcc135@pertamina.com',
                'Email yang digunakan :',
                'Subject Email yang dikirimkan :',
                'Infokan SLA'
            ],
            'sosmed' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Penukaran :',
                'Nomor Terdaftar MyPertamina dan LinkAja :',
                'Jenis Merchandise :',
                'Jumlah Poin Sebelum Terpotong :',
                'Jumlah Poin Setelah Terpotong :',
                'Notifikasi Berhasil : (Berhasil/Tidak Berhasil)',
                'Alamat Pengiriman :',
                'Detail Permasalahan :',
                'Email :',
                'CP :',
                'Infokan screenshot penukaran :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('C/P19/index', $data);
    }
}
