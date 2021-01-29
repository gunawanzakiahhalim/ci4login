<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P31 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Promo MyPertamina (Complaint)',
            'update' => '13:31 30/Oct/20',
            'rootcause' => [
                'Pelanggan mengikuti promo MyPertamina, namun tidak mendapatkan apa yang dijanjikan dalam promo.',
                'Misalnya: cashback hingga 25%, promo 25 poin Pertamax, dan lain-lain.'
            ],
            'cwc' => ['Complaint - MyPertamina - Promo MyPertamina (Complaint)'],
            'todolist' => [
                'Agent lakukan pengecekan syarat dan ketentuan promo.' => [
                    'Pastikan pelanggan memenuhi persyaratan (produk, dll) dan pastikan SLA proses yang berlaku untuk mendapatkan promonya.',
                    'Jika masih dalam SLA proses, sarankan pelanggan menunggu (FCR).',
                    'Panduan informasi input CWC "Informasi - MyPertamina - Promo MyPertamina" sesuai pansolnya.'
                ],
                'Tanyakan LinkAja Syariah konsumen Aktif / Tidak Aktif' => [
                    'Cek : LinkAja > Akun > LinkAja Syariah'
                ],
                'Jika pelanggan sudah memenuhi persyaratan, namun tidak mendaptkan promo padahal sudah melebihi SLA proses yang dicantumkan, agent bantu create tiket dengan mengisi mandatory lengkap.' => ['-'],
                'Infokan SLA' => ['-']
            ],
            'mandatory' => [
                'Nama :',
                'Tgl Transaksi :',
                'No SPBU :',
                'No Mypertamina :',
                'LinkAja Syariah : Aktif / Tidak Aktif',
                'Jenis BBM :',
                'Nominal Transaksi :',
                'Reff No :',
                'CP :',
                'Detail Permasalahan :',
                'Screenshot kirim ke pcc135@pertamina.com, menggunakan Email :'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('C/P31/index', $data);
    }
}
