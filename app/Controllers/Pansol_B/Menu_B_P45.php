<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P45 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Minta Asistensi Pemasangan LPG',
            'update' => '13:46 27/Oct/20',
            'rootcause' => [
                'Terkait Minta asistensi pemasangan LPG'
            ],
            'cwc' => ['Information - Layanan Domgas - Minta asistensi pemasangan LPG'],
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
        return view('B/P45/index', $data);
    }
}
