<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P62 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Prosedur Pendirian SPB Vi-Gas',
            'update' => '11:32 27/Oct/20',
            'rootcause' => [
                'Terkait Prosedur Pendirian SPB Vi-Gas'
            ],
            'cwc' => ['Information - Layanan Domgas - Prosedur Pendirian SPB Vi-Gas'],
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
        return view('B/P62/index', $data);
    }
}
