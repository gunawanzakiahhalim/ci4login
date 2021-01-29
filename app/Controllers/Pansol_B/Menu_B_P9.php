<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P9 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Delivery Promo Domestic Gas',
            'update' => '11:03 27/Oct/20',
            'rootcause' => [
                'Terkait Delivery Promo Domestic Gas'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Delivery Promo Domestic Gas'],
            'todolist' => [
                'Agent 135 memberikan informasi Agen terdekat yang akan melayani pengiriman',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P9/index', $data);
    }
}
