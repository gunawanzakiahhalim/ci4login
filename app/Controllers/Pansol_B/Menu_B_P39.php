<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P39 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'lsi gas LPG kurang',
            'update' => '13:38 27/Oct/20',
            'rootcause' => [
                'Terkait lsi gas LPG kurang'
            ],
            'cwc' => ['Complaint - Layanan Domgas - lsi gas LPG kurang'],
            'todolist' => [
                'Ada upaya tindak lanjut untuk upaya penyelesaian, disertai bukti otentik foto perbaikan'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P39/index', $data);
    }
}
