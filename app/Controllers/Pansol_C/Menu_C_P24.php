<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P24 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'MyPertamina OTP Tidak Masuk',
            'update' => '11:00 30/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan tidak mendapatkan kode OTP.',
                'Kode OTP diperlukan dalam proses registrasi akun MyPertamina dan atau setelah mengganti PIN. Kode OTP akan dikirimkan ke nomor Handphone yang didaftarkan.'
            ],
            'cwc' => ['Complaint - MyPertamina - MyPertamina OTP Tidak Masuk'],
            'todolist' => [
                'Pastikan nomor operator dalam keadaan aktif dan bisa menerima sms (inbox tidak penuh),',
                'Pastikan apabila pelanggan mempunyai aplikasi VPN, sampaikan agar settingan VPN nya dalam keadaan OFF',
                'Pastikan pelanggan sudah install aplikasi MyPertamina versi terbaru',
                'Sarankan clear cache dan restart HP',
                'Jika semua langkah sudah dicoba agent bantu creat ticket'
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
            'sla' => '3x24 Jam'
        ];
        return view('C/P24/index', $data);
    }
}
