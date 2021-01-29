<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P30 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Ketersediaan LPG di SPBU/Bright Store',
            'update' => '10:18 27/Oct/20',
            'rootcause' => [
                'Pelanggan menanyakan Ketersediaan LPG di SPBU / Bright Store.'
            ],
            'cwc' => ['Information - Layanan Domgas - Ketersediaan LPG di SPBU/Bright Store'],
            'todolist' => [
                'Sampaikan bahwa informasi tersebut harus dikoordinasikan terlebih dahulu kepada tim yang bertanggung jawab:' => [
                    'Tanyakan Nama Pelapor',
                    'Tanyakan Nomor SPBU / Bright Store yang Pelanggan tanyakan ketersediaannya',
                    'Tanyakan Detail Lokasi SPBU / Bright Store (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                    'Tanyakan Jenis LPG yang Pelanggan tanyakan ketersediaannya',
                    'Tanyakan Ukuran LPG yang Pelanggan tanyakan ketersediaannya',
                    'Tanyakan Berapa LPG yang Pelanggan butuhkan',
                    'Tanyakan nomor yang bisa dihubungi (kondisional)',
                    'Sampaikan SLA'
                ]
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Jenis dan Ukuran LPG : (Bright Gas/Elpiji)',
                'Jumlah Kebutuhan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('B/P30/index', $data);
    }
}
