<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P22 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Keluhan kualitas BBM',
            'update' => '10:07 19/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan kualitas BBM yang diterima tidak sesuai dengan yang seharusnya dan tidak ada unsur kelalaian dari petugas SPBU.',
                'Misalnya, penampakan warna, Oktan number atau Cetane number, dll.'
            ],
            'cwc' => ['Complaint - Layanan BBM - Keluhan kualitas BBM'],
            'todolist' => [
                'Tanyakan jenis BBM apa yang dibeli',
                'Tanyakan Tanggal dan Waktu Kejadian',
                'Nomor SPBU ( Tanpa Titik ) atau Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                '**Lokasi SPBU wajib ditanyakan walaupun pelanggan mengetahui nomor SPBUnya. Namun, jika pelanggan tidak mengetahui nomor SPBU, agent bisa tetap eskalasi dengan hanya mencantumkan lokasi dan patokan SPBU.',
                'Agent cek source apakah SPBU menyediakan produk BBM yang dimaksud pelanggan (Jika SPBU tersebut tidak menyediakan produk yang dikeluhkan, maka agent edukasi sesuai produk yang tersedia di SPBU tersebut).',
                'Jika SPBU tersebut menyediakan produk yang dikeluhkan pelanggan, agent create tiket dengan mengisi mandatory lengkap.',
                'Infokan SLA.'
            ],
            'mandatory' => [
                'Nama Pelapor',
                'Tanggal dan Waktu Kejadian',
                'Nomor SPBU ( Tanpa Titik ) atau Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                '**Lokasi SPBU wajib ditanyakan walaupun pelanggan mengetahui nomor SPBUnya. Namun, jika pelanggan tidak mengetahui nomor SPBU, agent bisa tetap eskalasi dengan hanya mencantumkan lokasi dan patokan SPBU.',
                'Detail Permasalahan',
                'Nomor yang bisa dihubungi',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P22/index', $data);
    }
}
