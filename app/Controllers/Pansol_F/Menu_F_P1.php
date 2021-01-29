<?php

namespace App\Controllers\Pansol_F;

use App\Controllers\BaseController;

class Menu_F_P1 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_F);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kendala Token Pertagas Tidak Dapat Digunakan',
            'update' => '16:34 30/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan Token Pertagas tidak dapat digunakan.'
            ],
            'cwc' => ['Complaint - Pertagas'],
            'todolist' => [
                'todolist',
                'todolist',
                'todolist'
            ],
            'mandatory' => [
                'Nama :',
                'Alamat :',
                'Tanggal Kejadian :',
                'Tanggal Pembelian :',
                'Tipe Gas :',
                'Warna Pipa Gas :',
                'Nominal Pembelian Token : Rp',
                'Jumlah m3 (Meter Kubik) :',
                'No Token Gagal :',
                'No Meter :',
                'Keterangan Gagal :',
                'CP :',
                'Detail Permasalahan :',
                'Screenshot Struk kirim ke pcc135@pertamina.com, menggunakan Email :'
            ],
            'sla' => 'Jam'
        ];
        return view('F/P1/index', $data);
    }
}
