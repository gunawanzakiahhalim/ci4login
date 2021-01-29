<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P15 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Informasi Kebijakan SPBU',
            'update' => '10:31 26/Oct/20',
            'rootcause' => [
                'Misal : informasi syarat dan ketentuan pengisian BBM yang berlaku di SPBU tertentu / pembatasan pembelian BBM / dsb'
            ],
            'cwc' => ['Information - Layanan BBK - Informasi Kebijakan SPBU'],
            'todolist' => [
                'Informasi : Standar Jawaban : "Bapak/ Ibu terkait hal tersebut sebetulnya menjadi kebijakan pihak SPBU setempat."',
                'Komplain : "Bapak/ Ibu terkait hal tersebut sebetulnya menjadi kebijakan pihak SPBU setempat. Perihal permasalahan Bapak/ Ibu akan kami koordinasikan."'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('A/P15/index', $data);
    }
}
