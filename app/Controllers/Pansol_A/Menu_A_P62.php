<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P62 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'SPBU menyediakan uang kembalian recehan logam',
            'update' => '11:00 26/Oct/20',
            'rootcause' => [
                'Pelanggan memberikan saran terkait penyediaan uang receh logam'
            ],
            'cwc' => ['Information - Layanan BBK - SPBU menyediakan uang kembalian recehan logam'],
            'todolist' => [
                'Standar Jawaban : "Terimakasih atas saran yang Bapak/ Ibu sampaikan, akan kami tampung sebagai bahan untuk perbaikan kami di masa YAD."'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'CP :',
                'Saran yang disampaikan :'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('A/P62/index', $data);
    }
}
