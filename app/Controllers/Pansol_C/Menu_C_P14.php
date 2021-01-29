<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P14 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'MyPertamina Cara Registrasi',
            'update' => '13:38 30/Oct/20',
            'rootcause' => [
                'Pelanggan ingin mengetahui cara registrasi akun MyPertamina.'
            ],
            'cwc' => ['Information - MyPertamina - MyPertamina Cara Registrasi'],
            'todolist' => [
                'FCR > Agent jelaskan dengan cara memandu pelanggan agar bisa registrasi MyPertamina mengacu pada source "FAQ MyPertamina (Edit)". Flow registrasi'
            ],
            'registrasi' => [
                'Proses Registrasi My Pertamina.' => [
                    'Ditampilan awal pada Aplikasi MyPertamina pilih Daftar jika belum memiliki Akun aplikasi My Pertamina',
                    'Isi data nama lengkap, No Hp yang akan digunakan untuk daftar aplikasi MyPertamina, dan Buat Pin sebagai kode pengaman aplikasi MyPertamina lalu klik Daftar',
                    'Lalu akan muncul pop up dengan keterangan Masukan kode OTP yang terdapat pada SMS di nomor handphone yang Anda daftarkan, masukan kode OTP lalu klik verifikasi.',
                    'Setelah itu akan ada pop up dengan keterangan Registrasi dengan nomor 08XXX telah berhasil. Silakan login dengan nomor tersebut.',
                    'Log in dengan menginput nomor handphone, lalu masukan kode pinnya maka akan masuk ke aplikasi MyPertamina.'
                ],
                'Tanyakan pelanggan apakah sudah memiliki akun LinkAja' => [
                    'Buka aplikasi My Pertamina lalu Log in dengan menginput nomor handphone, lalu masukan kode pinnya maka akan masuk ke aplikasi MyPertamina.',
                    'di tampilan awal ada keterangan akun Linkaja belum terhubung, silakan klik Aktifkan.',
                    'muncul pop up (apakah anda sudah memiliki akun Linkaja ? Tekan “Sudah” jika Anda sudah memiliki akun Linkaja dan Anda akan diarahkan ke halaman aktivasi, Tekan “Belum” jika Anda belum memiliki akun Linkaja dan Anda akan diarahkan ke App store/play store untuk menginstall aplikasi Linkaja',
                    'silakan download dan install aplikasi Linkaja',
                    'Daftarkan kembali nomor hp yang digunakan di akun aplikasi MyPertamina di Aplikasi Linkaja (hanya sekedar informasi untuk memudahkan dalam transaksi disarankan Upgrade ke Full sercvice dengan mendaftarkan NIK KTP, foto selfi dengan KTP di aplikasi Linkaja)',
                    'jika sudah terdaftar, langkah selanjutnya mengaktifkan akun Linkaja di aplikasi Mypertamina.',
                    'jika sudah terdaftar, langkah selanjutnya mengaktifkan akun Linkaja di aplikasi Mypertamina.'
                ],
                'Aktivasi Linkaja pada Apikasi MyPertamina' => [
                    'Pastikan sudah memiliki update aplikasi MyPertamina dengan versi terbaru (dapat dilihat di menu Akun - Bantuan) dan akun Linkaja',
                    'pilih icon “AKTIFKAN” pada beranda',
                    'pilih "SUDAH" jika telah memiliki akun Linkaja',
                    'Pastikan nomor Linkaja sama dengan nomor pada aplikasi Mypertamina (harus sama) dan masukan Pin Linkaja lalu pilih Continue',
                    'maka tampilan di akun Aplikasi MyPertamina akan berubah diberandanya.'
                ]
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'FCR'
        ];
        return view('C/P14/index', $data);
    }
}
