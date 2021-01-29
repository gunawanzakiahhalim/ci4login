<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P29 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kesulitan Mendapatkan LPG',
            'update' => '8:37 27/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan sulit mendapatkan LPG'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Kesulitan Mendapatkan LPG'],
            'todolist' => [
                'LPG Non subsidi : Lanjutkan ke pertanyaan untuk Mandatory Tiket, agent bantu eskalasi dan sampaikan SLA',
                'LPG Bersubsidi : Edukasikan ketentuan LPG Bersubsidi sesuai source'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Lokasi Kejadian : (Pastikan Kecamatan, dan Kota Jelas)',
                'Nama Agen/Nama Pangkalan : (Opsional namun tetap tanyakan)',
                'Jenis dan Ukuran LPG : (Bright Gas/Elpiji)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P29/index', $data);
    }
}
