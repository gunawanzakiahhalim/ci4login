<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P19 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kebijakan Pembayaran di SPBU',
            'update' => '9:19 19/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan kebijakan pembayaran di SPBU.',
                'Misalnya, SPBU menentukan batas minimum transaksi ketika menggunakan aplikasi MyPertamina.'
            ],
            'cwc' => ['Complaint - Layanan BBM - Kebijakan Pembayaran di SPBU'],
            'todolist' => [
                'Pastikan metode pembayaran yang pelanggan gunakan.',
                'Jika menggunakan debit dan disampaikan harus ada minimum transaksi, agent edukasi hal tersebut mengikuti kebijakan Banknya (FCR)',
                'Jika pelanggan menggunakan aplikasi MyPertamina dan pihak SPBU menentukan batas minimum transaksi, agent bantu create tiket dengan mengisi mandatory lengkap.',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Tanyakan Nama Pelapor.',
                'Tanyakan Tanggal dan Waktu Kejadian',
                'Nomor SPBU ( Tanpa Titik ) atau Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                '**Lokasi SPBU wajib ditanyakan walaupun pelanggan mengetahui nomor SPBUnya. Namun, jika pelanggan tidak mengetahui nomor SPBU, agent bisa tetap eskalasi dengan mencantumkan lokasi dan patokan SPBU.',
                'Tanyakan Metode pembayaran',
                'Tanyakan Nama Petugas SPBU. Jika pelanggan tidak mengetahui nama petugas SPBU, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                'Tanyakan Detail permasalahan',
                'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P19/index', $data);
    }
}
