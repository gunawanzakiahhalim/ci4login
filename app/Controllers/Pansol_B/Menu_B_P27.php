<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P27 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kerjasama pengadaan event terkait LPG',
            'update' => '15:37 27/Oct/20',
            'rootcause' => [
                'Terkait Kerjasama pengadaan event terkait LPG'
            ],
            'cwc' => ['Demand - Layanan Domgas - Kerjasama pengadaan event terkait LPG'],
            'fcr' => [
                'Agent 135 menginformasikan untuk permohonan kerjasama dapat diajukan ke MOR setempat.',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Tanyakan Nama Pelanggan',
                'Tanyakan Kota tempat Event',
                'Tanyakan Nama Event',
                'Tanyakan Nama Ketua Panitia / PIC yang bertanggung jawab',
                'Tanyakan Nama Instansi dan alamat penyelenggara event',
                'Nomor yang bisa dihubungi / PIC'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Rencana Lokasi Event : (Pastikan Kota Jelas)',
                'Rencana Nama Event',
                'Nama Instansi Penyelenggara :',
                'Alamat Instansi Penyelenggara :',
                'CP Instansi :',
                'CP PIC :',
                'Infokan SLA'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('B/P27/index', $data);
    }
}
