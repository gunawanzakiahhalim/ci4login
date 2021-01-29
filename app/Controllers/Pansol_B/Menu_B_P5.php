<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P5 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Cara Penanganan Kebocoran LPG',
            'update' => '11:12 27/Oct/20',
            'rootcause' => [
                'Terkait Cara Penanganan Kebocoran LPG'
            ],
            'cwc' => ['Information - Layanan Domgas - Cara Penanganan Kebocoran LPG'],
            'todolist' => [
                'Agent 135 memberikan informasi kepada konsumen terkait tata cara penggunaan LPG yang baik serta penanganan ketika terjadi kebocoran',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'FCR'
        ];
        return view('B/P5/index', $data);
    }
}
