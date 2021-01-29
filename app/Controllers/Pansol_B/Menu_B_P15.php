<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P15 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kelangkaan Domgas',
            'update' => '13:24 27/Oct/20',
            'rootcause' => [
                'Terkait Kelangkaan Domgas'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Kelangkaan Domgas'],
            'todolist' => [
                'Apabila kelangkaan tentang LPG subsidi, ',
                'Agen 135 minta maaf dan memberikan penjelasan ke Konsumen dan mengarahkan ke Non Subsidi',
                'Solusi FCR (Kalau Konsumen Puas Closed)
                '
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P15/index', $data);
    }
}
