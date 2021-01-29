<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P40 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Masukan agar Pertamina Retail lebih gencar untuk promosi Pembelian LPG di SPBU/Bright',
            'update' => '10:03 27/Oct/20',
            'rootcause' => [
                'Pelanggan memberikan saran dan masukan agar Pertamina Retail lebih gencar untuk promosi Pembelian LPG di SPBU / Bright Store.'
            ],
            'cwc' => ['Saran - Layanan Domgas - Masukan agar Pertamina Retail lebih gencar untuk promosi Pembelian LPG di SPBU/Bright'],
            'todolist' => [
                'Tanyakan Nama Pelapor',
                'Tanyakan Program promo yang diinginkan oleh pelanggan',
                'Tanyakan nomor yang bisa dihubungi (kondisional)'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Promo yang diinginkan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P40/index', $data);
    }
}
