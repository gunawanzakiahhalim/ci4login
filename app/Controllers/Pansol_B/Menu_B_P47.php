<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P47 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Pelayanan Petugas LPG',
            'update' => '9:43 27/Oct/20',
            'rootcause' => [
                'Keluhan masyarakat terkait layanan agen penyedia LPG',
                'seperti tidak ramah ketika melayani pembelian di tempat, petugas tidak ramah/jutek/meminta Tip ketika pengantaran LPG, petugas tidak menggunakan seragam, menolak untuk membantu pemasangan regulator saat delivery'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Pelayanan Petugas LPG'],
            'todolist' => [
                'Tanyakan nama pelapor.',
                'Tanyakan tanggal dan waktu kejadian.',
                'Tanyakan nama agen LPG dan lokasi kejadian',
                'Tanyakan Nama Petugas LPG. Jika pelanggan tidak mengetahui nama petugas LPG, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                'Tanyakan terkait keluhan layanan',
                'Tanyakan nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nama Agen :',
                'Alamat Agen :',
                'Nama Petugas : (Pria/Wanita)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P47/index', $data);
    }
}
