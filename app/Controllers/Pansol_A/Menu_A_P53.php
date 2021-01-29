<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P53 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Pertamini',
            'update' => '8:56 04/Nov/20',
            'rootcause' => [
                'Informasi terkait Pertamini'
            ],
            'cwc' => ['Information - Layanan BBK - Pertamini'],
            'todolist' => [
                'Standar Jawaban : "Bapak/ Ibu, kami informasikan bahwa Pertamini bukan merupakan produk dari Pertamina."'
            ],
            'mandatory' => [
                'Stanjab'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P53/index', $data);
    }
}
