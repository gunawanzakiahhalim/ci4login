<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P31 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Komplain Jaringan Pipa Gas Tanam',
            'update' => '16:34 27/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan terkait jaringan pipa gas tanam contohnya kebocoran gas tanam, dll.'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Kerjasama pengadaan event terkait LPG'],
            'todolist' => [
                'Agent harus memastikan apakah pipa gas tanam pelanggan milik PGN atau Pertagas?'
            ],
            'pipa' => [
                'Apabila pelanggan mengetahui bahwa pipanya milik PGN, maka sarankan hubungi contact.center@pgn.co.id atau telpon 1500645.' => ['-'],
                'Apabila pelanggan tidak mengetahui pipa tanamnya milik PGN atau Pertagas, maka agent jelaskan akan dibantu pelaporan untuk pengecekan lebih lanjut, pastikan mengisi data sbb:' => [
                    'Warna pipa',
                    'Lokasi pelanggan',
                    'Apakah sudah menggunakan token gas atau belum?',
                    'ID pelanggan'
                ]
            ],
            'mandatory' => [
                'Nama pelanggan',
                'Waktu dan tanggal Kejadian',
                'Detail permasalahan',
                'Warna pipa',
                'Lokasi pelanggan',
                'Metode pembayaran yang bisa digunakan? misalnya token atau apa?',
                'ID pelanggan',
                'Sampaikan SLA'
            ],
            'sla' => '8 Jam'
        ];
        return view('B/P31/index', $data);
    }
}
