<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P18 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Jam Layanan SPBU',
            'update' => '8:57 19/Oct/20',
            'rootcause' => [
                'Jam layanan mengacu kepada informasi Source terbaru yang di update saat itu.',
                'Dan pastikan agent mengacu kepada data terbaru.',
                'Jika informasi tidak tersedia pada source agent bisa menginfokan untuk jam layanan spbu dari jam 06.00 - 22.00 waktu setempat'
            ],
            'cwc' => ['Complaint - Layanan BBM - Jam Layanan SPBU'],
            'fcr' => [
                'Agent 135 cari di database jam normal buka SPBU dan menginfokan ke konsumen',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Tanyakan nomor SPBU dan waktu yang dikeluhkan' => ['-'],
                'Agent crosscheck SPBU tersebut dan jam operasional yang seharusnya:' => [
                    'Jika sudah sesuai > agent informasikan waktu operasional SPBU tersebut (FCR).',
                    'Jika tidak sesuai > agent bantu create tiket.'
                ],
                'Infokan SLA' => ['-']
            ],
            'mandatory' => [
                'Nama Pelapor',
                'Tanggal dan Waktu Kejadian',
                'Nomor SPBU ( Tanpa Titik ) atau Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                '**Lokasi SPBU wajib ditanyakan walaupun pelanggan mengetahui nomor SPBUnya. Namun, jika pelanggan tidak mengetahui nomor SPBU, agent bisa tetap eskalasi dengan mencantumkan lokasi dan patokan SPBU.',
                'Detail permsalahan',
                'Nomor yang bisa dihubungi',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P18/index', $data);
    }
}
