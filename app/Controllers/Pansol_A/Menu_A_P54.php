<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P54 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Pertashop',
            'judul' => 'Pertashop',
            'update' => '10:56 26/Oct/20',
            'rootcause' => [
                'Informasi : Syarat dan ketentuan menjadi mitra pertashop.',
                'Usahakan bisa FCR ya, kecuali jika pelanggan menyampaikan tidak bisa datang dan menginginkan pengajuan melalui email, silakan create tiket dengan mandatory'
            ],
            'cwc' => ['Information - Layanan BBK - Pertashop'],
            'todolist' => [
                'S&K Ada di Arjuna'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Laporan :',
                'Rencana Lokasi : ( Pastikan penulisan Kecamatan dan Kota harus jelas.)',
                'Sebagai Badan / Lembaga / Pribadi :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P54/index', $data);
    }
}
