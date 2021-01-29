<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P27 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'MyPertamina Tidak Mendapatkan Poin',
            'update' => '10:52 12/Nov/20',
            'rootcause' => [
                'Pelanggan mengeluhkan tidak mendapatkan poin dari transaksi pembelian BBM'
            ],
            'cwc' => ['Complaint - MyPertamina - MyPertamina Tidak Mendapatkan Poin'],
            'todolist' => [
                'Pastikan agent melakukan pengecekan pada Web Dashboard apakah ada penambahan poin di no ybs.',
                'Jika tidak ada riwayat penambahan dan poin yang dapatkan dirasa tidak sesuai agent bisa create tiket.',
                'Tapi apabila sudah ada penambahan poin pada dashboard dan apabila di kalkulasikan ternyata sudah sesuai, agent tidak perlu create tiket'
            ],
            'identifikasi' => [
                'Tanyakan waktu kejadian' => ['-'],
                'Pastikan transaksi pembayaran menggunakan aplikasi mypertamina' => ['-'],
                'Pastikan produk BBM adalah produk yang mendapatkan poin' => [
                    'Jika produk tidak termasuk dalam daftar loyalty poin MyPertamina > solusi FCR, agent informasikan syarat dan ketentuan mendapatkan poin MyPertamina.',
                    'Jika produk sudah sesuai, penanganan dilanjutkan ke langkah berikutnya.'
                ],
                'Pastikan SPBU terdaftar di List SPBU Mypertamina (Bukan di SPBU LinkAja)' => ['-'],
                'Pastikan transaksi pembayaran sudah 1x24 Jam.' => [
                    'Jika transaksi < 1x24 jam, agent sarankan menunggu SLA proses.',
                    'Jika transaksi > 1x24 jam, agent bantu create tiket dengan mengisi data-data lengkap sesuai dengan mandatory.'
                ],
                'Agent sarankan pelanggan mengirimkan bukti transaksi ke email pcc135@pertamina.com dan agent cantumkan email pelanggan dalam notes tiket.' => ['-'],
                'Infokan SLA.' => ['-']
            ],
            'mandatory' => [
                'Nama :',
                'Tgl Transaksi :',
                'No SPBU :',
                'No Mypertamina :',
                'Jenis BBM :',
                'Nominal Transaksi :',
                'Reff No :',
                'CP :',
                'Detail Masalah :',
                'Screenshot kirim ke pcc135@pertamina.com, menggunakan Email :'
            ],
            'sla' => '7x24 Jam'
        ];
        return view('C/P27/index', $data);
    }
}
