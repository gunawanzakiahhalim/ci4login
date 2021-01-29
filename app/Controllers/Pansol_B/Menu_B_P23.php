<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P23 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Keluhan Transaksi menggunakan mesin EDC',
            'update' => '13:48 27/Oct/20',
            'rootcause' => [
                'Terkait Keluhan Transaksi menggunakan mesin EDC'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Keluhan transaksi menggunakan mesin edc'],
            'todolist' => [
                'Agent 135 menjelaskan solusi permasalahan transaksi EDC yang dimaksud (FAQ)',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P23/index', $data);
    }
}
