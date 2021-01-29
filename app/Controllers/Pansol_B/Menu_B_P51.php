<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P51 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Perang Harga antar Agen',
            'update' => '9:48 27/Oct/20',
            'rootcause' => [
                'Agent (Careline Officer) dapat jelaskan kepada pelanggan terkait HET Elpiji/Bright Gas kepada pelanggan sesuai dengan areanya,',
                'jika ada perbedaan harga HET dengan harga yang agen jual maka tanyakan point berikut:'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Perang Harga antar Agen'],
            'todolist' => [
                'Tanyakan nama pelapor',
                'Tanyakan tanggal dan waktu kejadian',
                'Tanyakan nama agen',
                'Tanyakan Lokasi dan alamat pembelian LPG',
                'Tanyakan Jenis tabung LPG yang dikeluhkan',
                'Tanyakan harga yang dijual oleh agent (agent infokan dan cek HET sesuai dengan Lokasi)',
                'Nomor yang dapat dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Alamat Agen :',
                'Jenis dan Ukuran LPG : (Bright Gas/Elpiji)',
                'Harga yang dikeluhkan :',
                'Harga Seharusnya :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P51/index', $data);
    }
}
