<?php

namespace App\Controllers\Pansol_E;

use App\Controllers\BaseController;

class Menu_E_P3 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_E);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Aplikasi Power Petugas Tidak Mengetahui Promo',
            'update' => '16:27 30/Oct/20',
            'rootcause' => [
                'Case Aplikasi Power (General)'
            ],
            'cwc' => ['Complaint - Lubricant - Aplikasi Power Petugas Tidak Mengetahui Promo'],
            'todolist' => [
                'Case Aplikasi Power (General)'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Jabatan :',
                'Nama Outlet/Bengkel :',
                'Alamat Outlet/Bengkel :',
                'ID Outlet :',
                'Nomor HP Terdaftar : (yang digunakan untuk Log In)',
                'Email :',
                'CP :',
                'Detail Permasalahan :',
                'Screenshot kirim ke pcc135@pertamina.com, menggunakan Email : (jika ada)'
            ],
            'sla' => 'SLA 3 HK'
        ];
        return view('E/P3/index', $data);
    }
}
