<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P46 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Pengiriman Stock',
            'update' => '9:13 26/Oct/20',
            'rootcause' => [
                'Pelanggan meminta untuk pengiriman stock BBM, karena produk tersebut sudah habis di SPBUnya.',
                'Ybs berkendala untuk memesan dengan cara eksisting misalnya aplikasi error atau pesan tidak terkirim, sehingga meminta bantuan CC 135 untuk pengiriman stock.'
            ],
            'cwc' => ['Demand - Layanan BBK - Pengiriman Stock'],
            'todolist' => [
                'Tanyakan nama pelapor.',
                'Cantumkan tanggal dan waktu menghubungi.',
                'Tanyakan Nomor SPBU, jika tidak mengetahui tanyakan lokasi seperti jalan dan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.',
                'Tanyakan tanggal dan waktu pengantaran.',
                'Tanyakan jenis dan jumlah bbm yang dipesan.',
                'Tanyakan nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Laporan :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Tanggal dan Waktu Pengantaran :',
                'Jenis BBM :',
                'Jumlah BBM :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('A/P46/index', $data);
    }
}
