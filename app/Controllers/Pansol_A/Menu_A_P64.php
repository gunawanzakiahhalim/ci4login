<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P64 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Struk Tidak Tersedia',
            'update' => '14:21 23/Oct/20',
            'judulroot' => 'STRUK TIDAK TERSEDIA',
            'rootcause' => [
                'Pelanggan tidak menerima struk pembelian BBM (belum meminta)',
                'Pelanggan tidak menerima struk pembelian BBM (sudah meminta)'
            ],
            'cwc' => ['Complaint - Layanan BBK - Struk Pembelian'],
            'todolist' => [
                'Agent tanyakan apakah pelanggan sudah meminta struk atau tidak meminta struk? '
            ],
            'judulsolusi' => 'Solusi yang diberikan sbb:',
            'solusi' => [
                'Pelanggan tidak menerima struk pembelian BBM (pelanggan belum meminta struknya)' => [
                    'Agent edukasi bahwa struk adalah hak pelanggan dan akan diberikan setelah pelanggan meminta struk kepada petugas.',
                    'Jika printer rusak atau kendala lainnya, pelanggan akan diberikan struk manual.',
                    'Apabila pelanggan sudah meminta struk, namun tetap tidak diberikan, maka solusi mengacu pada poin B.'
                ],
                'Pelanggan tidak menerima struk pembelian BBM (pelanggan sudah meminta struknya)' => [
                    'Pastikan pelanggan sudah meminta struk pembelian kepada petugas.',
                    'Tanyakan keterangan yang disampaikan petugas ketika struk tidak tersedia.',
                    'Agent bantu eskalasi dengan mengisi mandatory lengkap dan infokan SLA.'
                ]
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Nama Petugas SPBU : (Pria/Wanita)',
                'Jenis Kendaraan :',
                'Nomor Polisi Kendaraan :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P64/index', $data);
    }
}
