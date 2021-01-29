<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P12 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Case tidak bisa close day / Close shift (3)',
            'update' => '15:27 30/Oct/20',
            'rootcause' => [
                'Case tidak bisa close day (3) :'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Solusi :' => [
                    'close dl pos nya trus jalanin lagi',
                    'Jangan restar PC tetapi Cuma tutup POS terus jalanlkan lagi'
                ]
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P12/index', $data);
    }
}
