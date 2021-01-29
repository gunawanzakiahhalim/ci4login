<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P58 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Promo Nasional Domestic Gas',
            'update' => '11:06 27/Oct/20',
            'rootcause' => [
                'Terkait Promo Nasional Domestic Gas'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Promo Nasional Domestic Gas'],
            'todolist' => [
                'Agent 135 menjelaskan kembali terkait ketentuan promo',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P58/index', $data);
    }
}
