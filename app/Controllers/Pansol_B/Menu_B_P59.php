<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P59 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Promo Regional Domestic Gas',
            'update' => '11:09 27/Oct/20',
            'rootcause' => [
                'Terkait Promo Regional Domestic Gas'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Promo Regional Domestic Gas'],
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
        return view('B/P59/index', $data);
    }
}
