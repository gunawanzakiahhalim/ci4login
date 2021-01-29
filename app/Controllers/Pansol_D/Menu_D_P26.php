<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P26 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'List Aplikasi Pengecekan Awal SPBU Digital Pertamina',
            'update' => '14:34 30/Oct/20',
            'rootcause' => [
                'List Aplikasi Pengecekan Awal SPBU Digital Pertamina'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Digi SPBU' => [
                    'Fungsi : Monitoring SPBU Integrasi - BAST',
                    'http://digispbu.telkom.co.id',
                    'user : top',
                    'pass : top'
                ],
                'Dashboard spbu' => [
                    'Fungsi : cek spbu beroperasi / tidak',
                    'https://dashboard.spbu.id/login',
                    'user : top',
                    'pass : topmgt135'
                ],
                'Akses dashboard EDC (view only)' => [
                    'Fungsi : Dashboard EDC',
                    'https://edcspbu.pcsindonesia.co.id',
                    'user : telkom@telkom.co.id',
                    'password : telkom135'
                ],
                'Web Merchant Link Aja' => [
                    'Fungsi : Cek transaksi Link Aja',
                    'https://merchant.linkaja.id/payment',
                    'shortcode : pertamina_newwco',
                    'username : test_pertamina',
                    'password : Tdsccspbu20',
                    '**NOTE : 1 login utk 1 PC'
                ],
                'Data IP ALL REG' => [
                    'https://docs.google.com/spreadsheets/d/1A2t9fb0ikryCAmiBE2fE0lGylqlgdObskklaFAJXUM/edit#gid=659623232'
                ]
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P26/index', $data);
    }
}
