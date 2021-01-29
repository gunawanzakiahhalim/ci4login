<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P37 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'LPG menyediakan uang kembalian recehan logam',
            'update' => '13:54 27/Oct/20',
            'rootcause' => [
                'Terkait LPG menyediakan uang kembalian recehan logam'
            ],
            'cwc' => ['LPG menyediakan uang kembalian recehan logam'],
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
        return view('B/P37/index', $data);
    }
}
