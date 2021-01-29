<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P2 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Cara manambah nomer telpon pada struk EDC',
            'update' => '15:46 30/Oct/20',
            'rootcause' => [
                'Cara manambah nomer telpon pada struk EDC'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'bisa di tambah di footer atau di baris 2 di Address di Application Parameter.',
                'di GSMS Printer Server ... Klik tombol Config',
                'lalu di Footer yg ada 3 baris bisa disikan No. Telp nya',
                'setelah itu di restart GSMS Printer Server nya',
                'lalu EDC nya di restart'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P2/index', $data);
    }
}
