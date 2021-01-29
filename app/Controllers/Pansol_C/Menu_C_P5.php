<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P5 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Cara Top Up Saldo LinkAja',
            'update' => '13:47 30/Oct/20',
            'rootcause' => [
                'Pelanggan menanyakan cara Top Up Saldo LinkAja'
            ],
            'cwc' => ['Information - MyPertamina - Cara top up saldo LinkAja'],
            'todolist' => [
                'Silakan log in ke aplikasi Linkaja dengan masukan nomor handphone yg terdaftar dan masukan Pin nya,' => ['-'],
                'klik info saldo, ada pilihan isi saldo melalui :' => [
                    'Himbara (Bank BTN, BNI, Mandiri, Bank BRI)',
                    'Transfer Bank,',
                    'Kartu Debit,',
                    'Merchant dan Mitra Linkaja,',
                    'Grapari'
                ]
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('C/P5/index', $data);
    }
}
