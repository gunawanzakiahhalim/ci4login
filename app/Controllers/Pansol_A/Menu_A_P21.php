<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P21 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Keluhan Biaya Tambahan Pembelian BBM dengan Kartu Kredit',
            'update' => '10:38 19/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan biaya yang ditambahkan oleh petugas SPBU selain dari jumlah pengisian BBM, ketika transaksi menggunakan credit card.',
                'Misalnya pelanggan membeli Pertamax dengan total nominal Rp200.000, kemudian dalam tagihan petugas menambahkan biaya 20% dari nominal pembelian pelanggan.',
                'Agent bantu create tiket.'
            ],
            'cwc' => ['Complaint - Layanan BBM - Keluhan Biaya Tambahan Pembelian BBM dengan Kartu Kredit'],
            'todolist' => [
                'Tanyakan metode pembayaran (debit, CC, atau lainnya)',
                'Tanyakan produk, nominal yang seharusnya, jumlah yang ditagihkan',
                'Jika menggunakan debit, pastikan mesin EDC yang dipakai petugas sudah sesuai dengan bank karena ketika tidak sesuai, maka biasanya ada biaya admin kebijakan bank masing-masing.',
                'Jika menggunakan credit card dan petugas menginput biaya tambahan. Agent bantu eskalasi dengan mengisi data mandatory lengkap karena berdasarkan ketentuan saat ini tidak diperkenankan surcharge credit card.',
                'Infokan SLA.'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Nama Petugas SPBU : (Pria/Wanita)',
                'Nominal Pembelian :',
                'Nominal Tagihan :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan capture bukti transaksi atau print out rekening koran dikirim ke email pcc135@pertamina.com',
                'Email yang digunakan :',
                'Subject Email yang dikirimkan :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P21/index', $data);
    }
}
