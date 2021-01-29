<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P16 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'MyPertamina Error Message',
            'update' => '11:06 30/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan error message di aplikasi mypertamina.'
            ],
            'cwc' => ['Information - MyPertamina - MyPertamina Error Message'],
            'todolist' => [
                'Pastikan nomor operator dalam keadaan aktif',
                'Pastikan apabila pelanggan mempunyai aplikasi VPN, sampaikan agar settingan VPN nya dalam keadaan OFF',
                'Pastikan pelanggan sudah install aplikasi MyPertamina versi terbaru',
                'Sarankan clear cache dan restart HP',
                'Jika semua langkah sudah dicoba agent bantu creat ticket'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor Tedaftar MyPertamina :',
                'No KTP :',
                'Tipe Handphone :',
                'OS Handphone :',
                'Email yang Terdaftar :',
                'Keterangan Gagal :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('C/P16/index', $data);
    }
}
