<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P60 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Promo SPBU',
            'update' => '10:58 26/Oct/20',
            'rootcause' => [
                'Pelanggan menanyakan promo yang sedang berlaku di SPBU'
            ],
            'cwc' => ['Information - Layanan BBK - Promo SPBU'],
            'todolist' => [
                'Informasikan sesuai promo yang berlaku eksisting.',
                'Terkait promo khusus di SPBU tertentu (dan tidak ada infonya di 135) bisa diinfokan Standar Jawaban : ',
                '"Bapak/ Ibu terkait promo tsb (sebutkan promonya), untuk saat ini belum kami terima informasi resminya. Untuk sementara, bisa dikonfirmasikan langsung ke pihak SPBU tersebut."'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Promo yang dimaksud :',
                'Sumber Informasi :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('A/P60/index', $data);
    }
}
