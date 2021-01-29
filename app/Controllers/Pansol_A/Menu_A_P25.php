<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P25 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kerjasama Pengadaan Voucher BBM',
            'update' => '10:32 26/Oct/20',
            'rootcause' => [
                'Cara mendapatkan voucher BBK Pertamina Retail'
            ],
            'cwc' => ['Information - Layanan BBK - Kerjasama Pengadaan Voucher BBM'],
            'todolist' => [
                'Informasi : Informasi eksisting by Diana',
                'Permintaan : Kerjasama Pengadaan Voucher BBK'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Nama PIC :',
                'Nama Perusahaan :',
                'Alamat Perusahaan :',
                'Bentuk Kerjasama :',
                'Voucher yang diinginkan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('A/P25/index', $data);
    }
}
