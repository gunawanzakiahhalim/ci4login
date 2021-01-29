<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P9 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Delivery BBM (Program PDS)',
            'update' => '10:52 16/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan pemesanan BBM via 135 belum diterima dan sudah melebihi SLA pengantaran, agent bantu create tiket.'
            ],
            'cwc' => ['Complaint -'],
            'fcr' => [
                'Kalau masih dalam SLA Pengantaran, konsumen diinformasikan',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Agent cek SLA create tiket pemesanan BBM' => [
                    'Jika pelanggan complaint kurang dari 3 jam : Agent merge CWC ke id tiket permintaan pemesanan BBM sebelumnya dan agent tetap sarankan pelanggan menunggu SLA maksimal 3 jam serta tanyakan apakah sudah dikonfirmasi oleh pihak SPBU. Informasi dari pelanggan apakah sudah dihubungi atau belum oleh pihak SPBU, agent cantumkan dalam notes tambahan untuk merge tiket.',
                    'Jika pelanggan complaint lebih dari 3 jam : Agent bantu create tiket sesuai mandatory dan eskalasi dibuat pada kategori CWC Complaint - Layanan BBM - Delivery BBM.'
                ],
                'Agent tidak menanyakan ulang data yang sudah ada, namun lakukan konfirmasi.' => ['-'],
                'Infokan SLA' => ['-']

            ],
            'mandatory' => [
                'ID Tiket Pemesanan :',
                'ID Order Pemesanan :',
                'Nama Pelapor :',
                'Tanggal Laporan :',
                'CP :',
                'Notes Pemesanan :',
                'Detail Tambahan :'
            ],
            'sla' => '3x24 Jam'
        ];

        return view('A/P9/index', $data);
    }
}
