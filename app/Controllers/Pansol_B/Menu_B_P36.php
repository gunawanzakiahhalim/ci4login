<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P36 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Laporan Stock dari Agen',
            'update' => '9:56 27/Oct/20',
            'rootcause' => [
                'Untuk pelaporan stock, PCC135 mengakomodir setiap laporan stock Elpiji/Bright Gas'
            ],
            'cwc' => ['Information - Layanan Domgas - Laporan Stok dari Agen'],
            'todolist' => [
                'Tanyakan Nama Pelapor',
                'Tanggal Laporan',
                'Nama Agen',
                'Lokasi agen',
                'Tanyakan jenis dan jumlah LPG yang dilaporkan',
                'Tanyakan Nomor lain yang bisa dihubungi (kondisional)'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Nama Agen :',
                'Alamat Agen :',
                'Jenis dan Ukuran LPG : (Bright Gas/Elpiji)',
                'CP :'
            ],
            'sla' => 'FCR'
        ];
        return view('B/P36/index', $data);
    }
}
