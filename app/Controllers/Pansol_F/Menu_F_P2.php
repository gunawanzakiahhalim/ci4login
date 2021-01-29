<?php

namespace App\Controllers\Pansol_F;

use App\Controllers\BaseController;

class Menu_F_P2 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_F);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Pertagas',
            'update' => '16:36 30/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan mengenai Pertagas'
            ],
            'cwc' => ['Complaint - Pertagas'],
            'todolist' => [
                'Pertagas - Case General'
            ],
            'mandatory' => [
                'Nama :',
                'Alamat :',
                'Tanggal Kejadian :',
                'Tipe Gas :',
                'Warna Pipa Gas :',
                'No Meter :',
                'CP :',
                'Detail Permasalahan :',
                'Screenshot kirim ke pcc135@pertamina.com, menggunakan Email : (Jika ada)'
            ],
            'sla' => 'Jam'
        ];
        return view('F/P2/index', $data);
    }
}
