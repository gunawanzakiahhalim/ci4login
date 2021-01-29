<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P31 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Laporan Stock BBM',
            'update' => '10:38 26/Oct/20',
            'rootcause' => [
                'Untuk pelaporan stock, tim RFM sudah memiliki sistem yang sudah berjalan.',
                'Akan tetapi kita tetap akomodir setiap laporan stock SPBU.'
            ],
            'cwc' => ['Information - Layanan BBK - Laporan Stock BBM'],
            'todolist' => [
                'Tanyakan Nama Pelapor',
                'Tanggal Laporan',
                'Nomor SPBU (Tanpa Titik)',
                'Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Tanyakan jenis dan jumlah BBM yang dilaporkan (jika memungkinkan satuan nya dalam bentuk Liter)',
                'Tanyakan Nomor lain yang bisa dihubungi (kondisional)',
                'Agent eskalasi dengan mengisi data mandatory lengkap, agar data stock bisa direkap oleh Tier.',
                'Tidak sampaikan SLA, karena permasalahan akan close di 2nd Tier.'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Laporan :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Jenis BBM :',
                'Jumlah BBM : (Liter)',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P31/index', $data);
    }
}
