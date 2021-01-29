<?php

namespace App\Controllers\Pansol_Z;

use App\Controllers\BaseController;

class Menu_Z_P1 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_Z);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Case dari Call Center LinkAja/Helpdesk LinkAja',
            'update' => '8:44 02/Nov/20',
            'rootcause' => [
                'Case dari Call Center LinkAja/Helpdesk LinkAja'
            ],
            'cwc' => ['Complaint - MyPertamina - MyPertamina Kendala Transaksi'],
            'todolist' => [
                'Case dari Call Center LinkAja/Helpdesk LinkAja'
            ],
            'mandatory' => [
                'Nama :',
                'Tanggal Transaksi :',
                'Nomor SPBU :',
                'Lokasi SPBU :',
                'Nominal Transaksi :',
                'Receipt Nomor :',
                'Detail Keluhan :',
                'CP :',
                'Nomor LinkAja :'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('Z/P1/index', $data);
    }
}
