<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P65 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Valve LPG diubah menjadi seperti Blue Gas',
            'update' => '11:35 27/Oct/20',
            'rootcause' => [
                'Terkait Valve LPG diubah menjadi seperti Blue gas'
            ],
            'cwc' => ['Information - Layanan Domgas - Valve LPG diubah menjadi seperti Blue gas'],
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
        return view('B/P65/index', $data);
    }
}
