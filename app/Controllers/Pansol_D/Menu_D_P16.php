<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P16 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'EDC Requesting Payment Cancelled',
            'update' => '15:55 30/Oct/20',
            'rootcause' => [
                'EDC Requesting Payment Cancelled'
            ],
            'gambar' => 'paymentcancelled.jpg',
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Solusi : clear aplikasi nya dari recent apps, coba buka lagi aplikasi nya dan tes print'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P16/index', $data);
    }
}
