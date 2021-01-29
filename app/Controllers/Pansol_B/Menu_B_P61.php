<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P61 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Prosedur Menjadi Agen LPG',
            'update' => '13:41 27/Oct/20',
            'rootcause' => [
                'Terkait Prosedur menjadi agen LPG'
            ],
            'cwc' => ['Information - Layanan Domgas - Prosedur menjadi agen LPG'],
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
            'sla' => 'FCR'
        ];
        return view('B/P61/index', $data);
    }
}
