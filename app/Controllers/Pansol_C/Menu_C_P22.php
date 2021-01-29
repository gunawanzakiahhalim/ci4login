<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P22 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'MyPertamina Kendala Transaksi - Riwayat Transaksi Tidak Muncul',
            'update' => '14:14 30/Oct/20',
            'rootcause' => [
                'Kendala mengenai : MyPertamina Kendala Transaksi - Riwayat Transaksi Tidak Muncul'
            ],
            'cwc' => ['Complaint - MyPertamina - MyPertamina Kendala Transaksi - Riwayat Transaksi Tidak Muncul'],
            'todolist' => [
                'todolist',
                'todolist',
                'todolist'
            ],
            'mandatory' => [
                'Nama :',
                'Tgl Transaksi :',
                'No SPBU :',
                'No Mypertamina :',
                'Jenis BBM :',
                'Nominal Transaksi :',
                'Reff No :',
                'CP :',
                'Detail Masalah :',
                'Screenshot kirim ke pcc135@pertamina.com, menggunakan Email :'
            ],
            'sla' => 'Jam'
        ];
        return view('C/P22/index', $data);
    }
}
