<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P10 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Double payment transaksi via Bank',
            'update' => '11:07 26/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan kendala transaksi via debet perbankan, misalnya saldo terpotong double, struk tidak keluar, transaksi gagal saldo berkurang'
            ],
            'cwc' => ['Complaint - Layanan BBK - Double payment transaksi via Bank'],
            'todolist' => [
                'Agent pastikan channel pembayaran yang pelanggan gunakan:' => [
                    'Jika menggunakan MyPertamina > Solusi agent mengacu pada pansol "Double Payment MyPertamina" (FCR)',
                    'Jika menggunakan channel BANK, agent identifikasi :',
                ]
            ],
            'identifikasi' => [
                '> keterangan gagal',
                '> Waktu kejadian',
                '> Nama Bank',
                'Solusi > Arahkan pelanggan menghubungi pihak bank'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Channel Pembayaran : (Bank apa)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P10/index', $data);
    }
}
