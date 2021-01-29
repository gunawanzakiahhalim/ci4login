<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P44 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Pengaturan Antrian di SPBU',
            'update' => '10:52 26/Oct/20',
            'rootcause' => [
                'Pertanyaan terkait aturan antrian di SPBU',
                'Misalnya pelanggan ingin mengetahui apakah benar ada perbedaan jalur antrian bagi motor dan mobil, jalur antrian bagi pengisian Pertamax Turbo, dan lain-lain.'
            ],
            'cwc' => ['Complaint - Layanan BBK - Pengaturan Antrian di SPBU'],
            'todolist' => [
                'Stanjab : Tujuan pengaturan jalur pengisian BBM disesuaikan oleh SPBU untuk mengurai antrian. Namun, jika Bapak/Ibu merasakan ketidaknyamanan, kami bantu sampaikan kepada team agar pelayanan menjadi lebih optimal.'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Jenis BBM yang dilaporkan :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P44/index', $data);
    }
}
