<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P60 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Prosedur Menjadi Agen / Pangkalan LPG',
            'update' => '11:29 27/Oct/20',
            'rootcause' => [
                'Terkait Prosedur Menjadi Agen / Pangkalan LPG'
            ],
            'cwc' => ['Information - Layanan Domgas - Prosedur Menjadi Agen / Pangkalan LPG'],
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
        return view('B/P60/index', $data);
    }
}
