<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P25 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'MyPertamina Salah / Lupa PIN',
            'update' => '10:28 30/Oct/20',
            'rootcause' => [
                'Jika pelanggan mengeluhkan salah/Lupa PIN'
            ],
            'cwc' => ['Complaint - MyPertamina - MyPertamina Salah / Lupa PIN'],
            'todolist' => [
                'Sarankan agar pilih menu "lupa PIN Anda" , kemudian masukan nomor yang didaftarkan sebagai akun MyPertamina dan tunggu sms yang berisi URL/ web link untuk pembuatan PIN baru. jika sudah selesai, sarankan pelanggan login kembali',
                'pastikan nomor sudah sesuai dan terdaftar.',
                'Pastikan apabila pelanggan mempunyai aplikasi VPN, sampaikan agar settingan VPN nya dalam keadaan OFF',
                'Jika semua langkah sudah dicoba, namun masih berkendala, agent bantu creat ticket',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor Tedaftar MyPertamina :',
                'Tipe Handphone :',
                'OS Handphone :',
                'Keterangan Gagal :',
                'Detail Permasalahan :',
                'Email yang Terdaftar :',
                'CP :',
                'Email yang digunakan : (Jika Diperlukan)',
                'Infokan SLA'
            ],
            'sosmed' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor Tedaftar MyPertamina :',
                'No KTP :',
                'Tipe Handphone :',
                'OS Handphone :',
                'Keterangan Gagal :',
                'Detail Permasalahan :',
                'Email yang Terdaftar :',
                'CP :',
                'Infokan Screenshot Bukti :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('C/P25/index', $data);
    }
}
