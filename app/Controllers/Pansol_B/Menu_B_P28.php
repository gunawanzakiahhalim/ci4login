<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P28 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kerjasama untuk penjualan LPG',
            'update' => '14:05 27/Oct/20',
            'rootcause' => [
                'Terkait Kerjasama untuk penjualan LPG'
            ],
            'cwc' => ['Demand - Layanan Domgas - Kerjasama untuk penjualan LPG'],
            'todolist' => [
                'Agent 135 menanyakan kebutuhan LPG customer (jenis, volume, peruntukan, lokasi) dan menginformasikan selanjutnya ke SBM',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('B/P28/index', $data);
    }
}
