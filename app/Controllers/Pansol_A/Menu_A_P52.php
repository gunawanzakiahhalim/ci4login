<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P52 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Pertamina Lebih Gencar BBM Non Subsidi',
            'update' => '10:53 26/Oct/20',
            'rootcause' => [
                'Pertamina Lebih Gencar BBM Non Subsidi'
            ],
            'cwc' => ['Information - Layanan BBK - Pertamina Lebih Gencar BBM Non Subsidi'],
            'todolist' => [
                'FCR'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P52/index', $data);
    }
}
