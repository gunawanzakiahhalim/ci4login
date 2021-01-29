<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P50 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Permohonan RFID',
            'update' => '9:15 26/Oct/20',
            'rootcause' => [
                'Pelanggan sebagai badan usaha ingin membuat kartu RFID untuk memudahkan mobilitas perusahaannya.',
                'Pelanggan meminta agar perusahaannya menjadi member RFID.'
            ],
            'cwc' => ['Demand - Layanan BBK - Permohonan RFID'],
            'todolist' => [
                'Tanyakan Nama Pelapor (PIC)',
                'Tanggal dan Waktu Kejadian',
                'Perusahaan',
                'Lokasi Perusahaan',
                'Jenis Bidang Usaha',
                'Detail keperluan',
                'Tanyakan Nomor Telp PIC dan No Perusahaan'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Nama PIC :',
                'Tanggal dan Waktu Laporan :',
                'Nama Perusahaan :',
                'Alamat Perusahaan :',
                'Jenis Bidang Usaha Perusahaan :',
                'Detail Keperluan :',
                'CP Perusahaan :',
                'CP PIC :',
                'Alamat email Perusahaan:',
                'Infokan SLA'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('A/P50/index', $data);
    }
}
