<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P30 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Poin sudah berkurang voucher/merchandise belum didapatkan',
            'update' => '14:14 05/Jan/21',
            'rootcause' => [
                'Pelanggan mengeluhkan poin sudah terpotong namun voucher belum didapatkan.'
            ],
            'cwc' => ['Information - MyPertamina - Poin sudah berkurang voucher belum didapatkan'],
            'todolist' => [
                'Redeem Poin Gagal' => [
                    'Jika sudah lebih dari 1x24 jam namun tidak ada notifikasi berhasil penukaran dan poin tidak berkurang. Sarankan pelanggan mencoba redeem kembali dan agent tidak perlu melakukan eskalasi.',
                    'Jika sudah lebih dari 1x24 jam namun poin berkurang dan tidak ada notifikasi berhasil penukaran. Agent melakukan eskalasi (tiket) dengan SLA 3 Hari Kerja.'
                ]
            ],

            'gambar' => 'merchandise.jpg',
            'mandatory' => [
                'Nama :',
                'Tanggal dan Waktu Penukaran :',
                'Nomor MyPertamina :',
                'No KTP :',
                'Jenis Program :',
                'Jenis Voucher :',
                'Jumlah Poin Terakhir :',
                'Notifikasi Berhasil : (Berhasil/Tidak Berhasil)',
                'Detail Permasalahan :',
                'Email :',
                'CP :',
                'Screenshot kirim ke pcc135@pertamina.com, menggunakan Email :',
                'Alamat Pengiriman:'
            ]
        ];
        return view('C/P30/index', $data);
    }
}
