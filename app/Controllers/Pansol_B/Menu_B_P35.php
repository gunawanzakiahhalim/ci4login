<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P35 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Laporan Stock',
            'update' => '10:21 27/Oct/20',
            'rootcause' => [
                'Ybs ingin melaporkan stock.'
            ],
            'cwc' => ['Information - Layanan Domgas - Laporan Stock'],
            'todolist' => [
                'Tanyakan Nama Pelapor',
                'Tanyakan Nama Agen (contoh : PT.Teguh Artha Jaya)',
                'Tanyakan Detail Lokasi Agen (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian oleh 2nd Tier.)',
                'Tanyakan Laporan Stock',
                'Tanyakan nomor yang bisa dihubungi (kondisional)'
            ],
            'mandatory' => [
                'Nama Pelapor',
                'Nama Agen (contoh : PT.Teguh Artha Jaya)',
                'Detail Lokasi Agen (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor oleh 2nd Tier.)',
                'Laporan Stock',
                'Nomor yang bisa dihubungi (kondisional)',
                'Sampaikan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P35/index', $data);
    }
}
