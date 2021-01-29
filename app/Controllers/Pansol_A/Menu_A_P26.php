<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P26 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kerjasama Promosi Produk',
            'update' => '10:35 26/Oct/20',
            'rootcause' => [
                'Pelanggan ingin mengadakan kerjasama promosi produk.'
            ],
            'misal' => [
                'iklan, ingin membuka booth promo event di SPBU'
            ],
            'cwc' => ['Information - Layanan BBK - Kerjasama Promosi Produk'],
            'todolist' => [
                'Nama Pelapor :',
                'Nama PIC :',
                'Nama Perusahaan :',
                'Alamat Perusahaan :',
                'Jenis Bidang Usaha Perusahaan :',
                'Bentuk Kerjasama :',
                'Rencana Lokasi Kebutuhan : (opsional namun tetap tanyakan)',
                'CP Perusahaan :',
                'CP PIC :',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Nama PIC :',
                'Nama Perusahaan :',
                'Alamat Perusahaan :',
                'Jenis Bidang Usaha Perusahaan :',
                'Bentuk Kerjasama :',
                'Rencana Lokasi Kebutuhan : (opsional namun tetap tanyakan)',
                'CP Perusahaan :',
                'CP PIC :',
                'Infokan SLA'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('A/P26/index', $data);
    }
}
