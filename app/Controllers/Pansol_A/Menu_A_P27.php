<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P27 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Keterlambatan Pengiriman Stock',
            'update' => '16:56 20/Oct/20',
            'rootcause' => [
                'Pihak SPBU sudah melakukan pemesanan Stock BBM namun hingga waktu estimasi yang di janjikan belum diterima.',
                'Sehingga menghubungi untuk memastikan penyebab kendala nya atau status pemesanannya.'
            ],
            'cwc' => ['Complaint - Layanan BBK - Keterlambatan Pengiriman Stock'],
            'fcr' => [
                'Apabila yang menanyakan case dari pihak SPBU, maka disarankan untuk dapat melihat pada aplikasi rencana pengiriman dari Pertamina',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Tanyakan nama pelapor.',
                'Cantumkan tanggal dan waktu menghubungi.',
                'Tanyakan Nomor SPBU, jika tidak mengetahui tanyakan lokasi seperti jalan dan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.',
                'Tanyakan tanggal dan waktu pemesanan serta nomor/id order.',
                'Tanyakan jenis dan jumlah bbm yang dipesan.',
                'Tanyakan nomor yang bisa dihubungi (kondisional)',
                'Agent bantu eskalasi dengan mengisi mandatory lengkap',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Tanyakan tanggal dan waktu pemesanan. serta nomor/id order.',
                'Detail Permasalahan',
                'Jenis BBM :',
                'Jumlah Pemesanan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P27/index', $data);
    }
}
