<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P22 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Keluhan Promo LPG',
            'update' => '9:54 27/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan adanya perbedaan informasi promo yang pelanggan dapat dari Media cetak/Sosial media/televisi/website/radio/pamflet/baliho, dll.'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Keluhan Promo LPG'],
            'fcr' => [
                'Agent 135 menjelaskan kembali terkait ketentuan promo',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Tanyakan nama pelapor)',
                'Tanyakan sejak kapan mengetahui promo tersebut (tanggal dan waktu kejadian)',
                'Tanyakan Materi Promo yang pelanggan dapatkan',
                'Tanyakan source informasi yang pelanggan dapat',
                'Tanyakan detil permasalahan berkaitan dengan promo tersebut',
                'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Lokasi Keluhan : (Nama Agen jika di Agen, Isi No SPBU jika di SPBU)',
                'Lokasi Keluhan : (Alamat Agen jika di Agen, Isi Alamat SPBU jika di SPBU)',
                'Promo yang dimaksud :',
                'Sumber Informasi :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P22/index', $data);
    }
}
