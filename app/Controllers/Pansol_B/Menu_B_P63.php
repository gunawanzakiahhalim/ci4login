<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P63 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Prosedur Pendirian SPPBE',
            'update' => '11:33 27/Oct/20',
            'rootcause' => [
                'Terkait Prosedur Pendirian SPPBE'
            ],
            'cwc' => ['Information - Layanan Domgas - Prosedur Pendirian SPPBE'],
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
        return view('B/P63/index', $data);
    }
}
