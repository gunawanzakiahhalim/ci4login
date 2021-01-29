<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P54 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Personil LPG tidak memberikan senyum, salam, sapa',
            'update' => '13:47 27/Oct/20',
            'rootcause' => [
                'Terkait Personil LPG tidak memberikan senyum, salam, sapa'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Personil LPG tidak memberikan senyum, salam, sapa'],
            'todolist' => [
                'todolist',
                'todolist',
                'todolist'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P54/index', $data);
    }
}
