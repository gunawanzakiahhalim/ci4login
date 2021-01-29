<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P8 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Double Payment MyPertamina',
            'update' => '16:09 07/Jan/21',
            'rootcause' => [
                'Apabila pelanggan gagal melakukan pembayaran via aplikasi MyPertamina dan pelanggan melakukan pembayaran kembali secara tunai'
            ],
            'cwc' => ['Complaint - MyPertamina - Double Payment'],
            'todolist' => [
                'Untuk Kendala Double pembayaran / yg berhubungan dengan kendala pada saat pembayaran dengan mesin EDC Menggunakan MyPertamina:' => [
                    'Tanyakan keterangan gagal',
                    'Tanyakan apakah saldo terpotong atau tidak?',
                    'Tanyakan nomor SPBU. Jika SPBU tidak support MyPertamina > agent informasikan (FCR). Namun, jika SPBU support MyPertamina agent create tiket dan sarankan pelanggan mengirim cature keterangan gagal ke email pcc135@pertamina.com',
                    'Infokan SLA'
                ]
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor Terdaftar MyPertamina dan LinkAja :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Jenis BBM :',
                'Nominal Transaksi :',
                'Keterangan Gagal :',
                'Pelanggan membayar tunai juga ke pihak SPBU atau tidak :',
                'Detail Permasalahan :',
                'CP :',
                'Screenshot kirim ke pcc135@pertamina.com, menggunakan Email :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('C/P8/index', $data);
    }
}
