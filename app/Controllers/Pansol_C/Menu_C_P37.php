<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P37 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Tidak bisa migrasi LinkAja',
            'update' => '11:16 30/Oct/20',
            'rootcause' => [
                'Pelanggan tidak bisa migrasi LinkAja di aplikasi MyPertamina'
            ],
            'cwc' => ['Information - MyPertamina - Tidak bisa migrasi LinkAja'],
            'todolist' => [
                'Saat ini apabila pelanggan menggunakan aplikasi MyPertamina versi terbaru memang sudah tidak bisa migrasi ke LinkAja karena metode pembayaran sudah otomatis akan menggunakan LinkAja sehingga langkah yang harus dilakukan hanya menghubungkan LinkAja dan aplikasi MyPertamina dengan cara klik "aktifkan".'
            ],
            'identifikasi' => [

                'Jika pelanggan mengeluhkan sebelumnya masih memiliki saldo dan setelah terhubung dengan LinkAja saldo tidak migrasi:' => [
                    'Sarankan download aplikasi Mobile cash (MC), lalu silakan untuk Daftar kembali menggunakan nomor handphone yang terdaftar di aplikasi MyPertamina, setelah proses daftar selesai silakan login dengan masukan nomor handphone dan pin nya, jika sudah masuk di aplikasi MC lihat jumlah saldo yang pelanggan miliki,',
                    'Saldo tersebut bisa digunakan untuk transaksi menggunakan aplikasi MC atau jika tidak akan digunakan aplikasi MC nya maka disarankan untuk ditransferkan ke rekening pelanggan'
                ],
                'Jika pelanggan menolak, keberatan, indikasi HK, agent bantu create tiket. Infokan SLA.' => ['-']

            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor Tedaftar MyPertamina :',
                'No KTP :',
                'Tipe Handphone :',
                'OS Handphone :',
                'Jumlah Saldo :',
                'Detail Permasalahan :',
                'Email :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('C/P37/index', $data);
    }
}
