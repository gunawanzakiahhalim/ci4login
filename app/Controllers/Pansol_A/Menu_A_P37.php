<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P37 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Masukan agar Pertamina lebih gencar untuk menggunakan BBM non subsidi',
            'update' => '10:47 26/Oct/20',
            'rootcause' => [
                'Masukan agar Pertamina lebih gencar untuk menggunakan BBM non subsidi'
            ],
            'cwc' => ['Masukan agar Pertamina lebih gencar untuk menggunakan BBM non subsidi'],
            'todolist' => [
                'Nama Pelapor :',
                'CP :',
                'Saran yang disampaikan :'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P37/index', $data);
    }
}
